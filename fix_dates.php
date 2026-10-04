<?php

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

$baseUrl = 'https://solitaireconsultancyservices.com/wp-json/wp/v2/posts';
$page = 1;
while (true) {
    $response = Http::withoutVerifying()->get($baseUrl, [
        'per_page' => 100,
        'page' => $page,
    ]);

    if ($response->failed() || empty($response->json()) || isset($response->json()['code'])) {
        break;
    }

    foreach ($response->json() as $post) {
        if (! isset($post['slug'])) {
            continue;
        }

        $date = Carbon::parse($post['date']);

        // Disable timestamps on the model so we can explicitly set created_at
        $blog = Blog::where('slug', $post['slug'])->first();
        if ($blog) {
            $blog->timestamps = false;
            $blog->created_at = $date;
            $blog->updated_at = $date;
            $blog->save();
        }
    }
    $page++;
}
echo "Dates fixed!\n";
