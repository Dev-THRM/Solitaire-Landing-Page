<?php

namespace App\Console\Commands;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ImportWordPressBlogs extends Command
{
    protected $signature = 'import:wp-blogs';

    protected $description = 'Import blogs from the live WordPress site via REST API';

    public function handle()
    {
        $baseUrl = 'https://solitaireconsultancyservices.com/wp-json/wp/v2/posts';
        $page = 1;
        $imported = 0;

        $this->info('Starting WordPress blog import...');

        while (true) {
            $this->info("Fetching page $page...");

            $response = Http::withoutVerifying()->get($baseUrl, [
                'per_page' => 100,
                'page' => $page,
            ]);

            if ($response->failed() || empty($response->json())) {
                break; // No more posts
            }

            $posts = $response->json();

            // Check if response is not an array (e.g. error object when page out of bounds)
            if (isset($posts['code']) && $posts['code'] === 'rest_post_invalid_page_number') {
                break;
            }

            foreach ($posts as $post) {
                // Skip if not a valid post array
                if (! isset($post['slug'])) {
                    continue;
                }

                // Check if blog already exists to avoid duplicates
                if (Blog::where('slug', $post['slug'])->exists()) {
                    continue;
                }

                $title = html_entity_decode(strip_tags($post['title']['rendered']));
                $content = $post['content']['rendered'];
                $slug = $post['slug'];
                $date = Carbon::parse($post['date']);

                $imagePath = null;

                // Try to get featured image
                $imageUrl = null;
                if (isset($post['rttpg_featured_image_url']['full'])) {
                    $fullUrl = $post['rttpg_featured_image_url']['full'];
                    if (is_array($fullUrl)) {
                        $fullUrl = $fullUrl[0];
                    }
                    if (is_string($fullUrl)) {
                        $imageUrl = explode('?', $fullUrl)[0];
                    }
                }

                if ($imageUrl) {
                    try {
                        $arrContextOptions = [
                            'ssl' => [
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                            ],
                        ];
                        $imageContents = file_get_contents($imageUrl, false, stream_context_create($arrContextOptions));
                        if ($imageContents) {
                            $extension = pathinfo(parse_url($imageUrl, PHP_URL_PATH), PATHINFO_EXTENSION);
                            if (empty($extension)) {
                                $extension = 'jpg';
                            }

                            $filename = $slug.'-'.time().'.'.$extension;
                            $path = 'blogs/'.$filename;

                            Storage::disk('public')->put($path, $imageContents);
                            $imagePath = $path;
                        }
                    } catch (\Exception $e) {
                        $this->warn("Failed to download image for: $title");
                    }
                }

                Blog::create([
                    'title' => $title,
                    'slug' => $slug,
                    'content' => $content,
                    'image' => $imagePath,
                    'created_at' => $date,
                    'updated_at' => $date,
                ]);

                $imported++;
            }

            $page++;
        }

        $this->info("Import complete! Successfully imported $imported blogs.");
    }
}
