<?php
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/../vendor/autoload.php';

// Create Slim App
$app = AppFactory::create();

// Create Twig instance pointing to templates folder
$twig = Twig::create(__DIR__ . '/../templates', ['cache' => false]);

// Add Twig middleware
$app->add(TwigMiddleware::create($app, $twig));

// Example route
$app->get('/', function ($request, $response, $args) use ($twig) {
    return $twig->render($response, 'index.html', ['name' => 'Nelson']);
});

// Run app
$app->run();
