<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Maintenance
if (file_exists($maintenance = __DIR__.'/../laravel_project/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoloader
require __DIR__.'/../laravel_project/vendor/autoload.php';

// Bootstrap
$app = require_once __DIR__.'/../laravel_project/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
