<?php

$c = file_get_contents('services.json');
$c = mb_convert_encoding($c, 'UTF-8', 'UTF-16LE');
$d = json_decode($c, true);
$content = strip_tags($d[0]['content']['rendered']);
$content = preg_replace('/\s+/', ' ', $content);
file_put_contents('services_clean.txt', $content);
