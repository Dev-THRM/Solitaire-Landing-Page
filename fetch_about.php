<?php

$context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
$json = file_get_contents('https://solitaireconsultancyservices.com/wp-json/wp/v2/pages?slug=about-us-premium-staffing', false, $context);
$data = json_decode($json, true);
$content = strip_tags($data[0]['content']['rendered']);
$content = preg_replace('/\s+/', ' ', $content);
file_put_contents('about_raw.txt', trim($content));
