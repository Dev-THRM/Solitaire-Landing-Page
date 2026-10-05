<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Define missing mbstring functions if the extension is not available...
if (!extension_loaded('mbstring')) {
    if (!function_exists('mb_strlen')) {
        function mb_strlen(?string $string, ?string $encoding = null): int { return strlen((string) $string); }
    }
    if (!function_exists('mb_substr')) {
        function mb_substr(?string $string, int $start, ?int $length = null, ?string $encoding = null): string { return $length === null ? substr((string) $string, $start) : substr((string) $string, $start, $length); }
    }
    if (!function_exists('mb_strtolower')) {
        function mb_strtolower(?string $string, ?string $encoding = null): string { return strtolower((string) $string); }
    }
    if (!function_exists('mb_strtoupper')) {
        function mb_strtoupper(?string $string, ?string $encoding = null): string { return strtoupper((string) $string); }
    }
    if (!function_exists('mb_strpos')) {
        function mb_strpos(?string $haystack, ?string $needle, int $offset = 0, ?string $encoding = null): int|false { return strpos((string) $haystack, (string) $needle, $offset); }
    }
    if (!function_exists('mb_strrpos')) {
        function mb_strrpos(?string $haystack, ?string $needle, int $offset = 0, ?string $encoding = null): int|false { return strrpos((string) $haystack, (string) $needle, $offset); }
    }
    if (!function_exists('mb_substr_count')) {
        function mb_substr_count(?string $haystack, ?string $needle, ?string $encoding = null): int { return substr_count((string) $haystack, (string) $needle); }
    }
    if (!function_exists('mb_strimwidth')) {
        function mb_strimwidth(?string $string, int $start, int $width, ?string $trim_marker = '', ?string $encoding = null): string {
            $string = (string) $string;
            $trim_marker = (string) $trim_marker;
            if ($start !== 0) { $string = substr($string, $start); }
            if (strlen($string) <= $width) { return $string; }
            return substr($string, 0, $width - strlen($trim_marker)).$trim_marker;
        }
    }
    if (!function_exists('mb_convert_encoding')) {
        function mb_convert_encoding(array|string|null $string, ?string $to_encoding, array|string|null $from_encoding = null): array|string|false { return $string; }
    }
    if (!function_exists('mb_detect_encoding')) {
        function mb_detect_encoding(?string $string, array|string|null $encodings = null, bool $strict = false): string|false { return 'UTF-8'; }
    }
    if (!function_exists('mb_internal_encoding')) {
        function mb_internal_encoding(?string $encoding = null): string|bool { return $encoding === null ? 'UTF-8' : true; }
    }
    if (!function_exists('mb_str_split')) {
        function mb_str_split(?string $string, int $length = 1, ?string $encoding = null): array { return str_split((string) $string, $length); }
    }
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
