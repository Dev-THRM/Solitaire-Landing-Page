<?php

namespace App\Console\Commands;

use App\Models\JobListing;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ImportWordPressJobs extends Command
{
    protected $signature = 'import:wp-jobs';

    protected $description = 'Import job openings from the live WordPress site via REST API';

    public function handle()
    {
        $baseUrl = 'https://solitaireconsultancyservices.com/wp-json/wp/v2/awsm_job_openings';
        $page = 1;
        $imported = 0;

        $this->info('Starting WordPress jobs import...');

        while (true) {
            $this->info("Fetching page $page...");

            $response = Http::withoutVerifying()->get($baseUrl, [
                'per_page' => 100,
                'page' => $page,
            ]);

            if ($response->failed() || empty($response->json()) || isset($response->json()['code'])) {
                break; // No more jobs
            }

            $jobs = $response->json();

            foreach ($jobs as $job) {
                // Skip if not a valid post array
                if (! isset($job['slug'])) {
                    continue;
                }

                $title = html_entity_decode(strip_tags($job['title']['rendered']));

                // Avoid duplicates by exact title matching since we don't have slug in JobListing
                if (JobListing::where('title', $title)->exists()) {
                    continue;
                }

                $description = $job['content']['rendered'] ?? '';
                $date = Carbon::parse($job['date']);

                // Try to extract location from title if it has a pipe e.g. "Manager | Mumbai"
                $location = 'Mumbai, India';
                if (str_contains($title, '|')) {
                    $parts = explode('|', $title);
                    $location = trim(end($parts));
                    // clean up the title
                    $title = trim($parts[0]);
                }

                $type = 'Full-time'; // Default to full-time for imported jobs

                // Disable timestamps globally to keep the original created_at
                JobListing::withoutTimestamps(function () use ($title, $description, $location, $type, $date) {
                    JobListing::create([
                        'title' => $title,
                        'location' => $location,
                        'type' => $type,
                        'description' => $description,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ]);
                });

                $imported++;
            }

            $page++;
        }

        $this->info("Import complete! Successfully imported $imported jobs.");
    }
}
