<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Create storage and cache directories in /tmp for Vercel serverless environment
$dirs = [
    '/tmp/storage/app/public',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

if (!file_exists('/tmp/database.sqlite')) {
    touch('/tmp/database.sqlite');
}

// Helper to set env in putenv, $_ENV, and $_SERVER
$setEnv = function ($key, $val) {
    putenv("{$key}={$val}");
    $_ENV[$key] = $val;
    $_SERVER[$key] = $val;
};

if (!getenv('APP_KEY')) {
    $setEnv('APP_KEY', 'base64:tKL8zcMtkohJV8LhkN72VCP9tVEvAdKEp/p1TmOSNEE=');
}

$setEnv('APP_DEBUG', 'true');
$setEnv('APP_ENV', 'production');
$setEnv('APP_STORAGE', '/tmp/storage');
$setEnv('VIEW_COMPILED_PATH', '/tmp/storage/framework/views');
$setEnv('APP_PACKAGES_CACHE', '/tmp/bootstrap/cache/packages.php');
$setEnv('APP_SERVICES_CACHE', '/tmp/bootstrap/cache/services.php');
$setEnv('APP_CONFIG_CACHE', '/tmp/bootstrap/cache/config.php');
$setEnv('APP_ROUTES_CACHE', '/tmp/bootstrap/cache/routes.php');
$setEnv('APP_EVENTS_CACHE', '/tmp/bootstrap/cache/events.php');
$setEnv('SESSION_DRIVER', 'cookie');
$setEnv('LOG_CHANNEL', 'stderr');
$setEnv('CACHE_STORE', 'array');
$setEnv('DB_CONNECTION', 'sqlite');
$setEnv('DB_DATABASE', '/tmp/database.sqlite');

register_shutdown_function(function () {
    $error = error_get_last();
    if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
        echo "<div style='font-family:sans-serif;padding:20px;background:#fee;color:#900;border:1px solid #f99;border-radius:8px;'>";
        echo "<h2>PHP Fatal Error: {$error['message']}</h2>";
        echo "<p><strong>File:</strong> {$error['file']}:{$error['line']}</p>";
        echo "</div>";
    }
});

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo "<div style='font-family:sans-serif;padding:20px;background:#fee;color:#900;border:1px solid #f99;border-radius:8px;'>";
    echo "<h2>Laravel Unhandled Exception: " . htmlspecialchars($e->getMessage()) . "</h2>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . ":" . $e->getLine() . "</p>";
    echo "<pre style='background:#fff;padding:10px;overflow:auto;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    echo "</div>";
}

