<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/init.php';

$settings = require_once __DIR__ . '/settings.php';
$app = new \Slim\App([
    'settings' => $settings,
]);

\Respect\Validation\Validator::with('\\App\\Http\\Validation\\Rules');

require_once __DIR__ . '/container.php';
require_once __DIR__ . '/middleware.php';

require_once ROOT . 'routes/routes.php';
