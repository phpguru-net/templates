<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
// ...
$router->get('/', function () {
  include_once  __DIR__ . '/pages/home.php';
});

$router->set404(function () {
  header('HTTP/1.1 404 Not Found');
  include_once  __DIR__ . '/pages/home.php';
});
// Run it!
$router->run();
