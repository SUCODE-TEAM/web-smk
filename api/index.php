<?php

// Create storage directories in /tmp for Vercel serverless environment
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

// Ensure crucial environment variables are set for Vercel serverless
if (!getenv('APP_KEY')) {
    putenv('APP_KEY=base64:tKL8zcMtkohJV8LhkN72VCP9tVEvAdKEp/p1TmOSNEE=');
}

if (!getenv('APP_DEBUG')) {
    putenv('APP_DEBUG=true');
}

putenv('APP_STORAGE=/tmp/storage');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');
putenv('CACHE_STORE=array');

// Forward Vercel requests to normal index.php
require __DIR__ . '/../public/index.php';
