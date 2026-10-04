<?php

$html = file_get_contents('https://solitaireconsultancyservices.com/about-us-premium-staffing/');
preg_match('/<body[^>]*>(.*?)<\/body>/is', $html, $matches);
$body = $matches[1] ?? $html;
$body = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $body);
$body = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $body);
$body = preg_replace('/<nav\b[^>]*>(.*?)<\/nav>/is', '', $body);
$body = preg_replace('/<footer\b[^>]*>(.*?)<\/footer>/is', '', $body);
$text = strip_tags($body);
$text = preg_replace('/\s+/', ' ', $text);
echo trim($text);
