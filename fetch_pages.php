<?php

$context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
$json = file_get_contents('https://solitaireconsultancyservices.com/wp-json/wp/v2/pages?per_page=100', false, $context);
$pages = json_decode($json, true);
foreach ($pages as $page) {
    echo $page['slug'].' | '.$page['title']['rendered']."\n";
}
