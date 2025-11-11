<?php
require __DIR__ . '/vendor/autoload.php'; // Make sure this path is correct

use Twig\Environment;
use Twig\Loader\ArrayLoader;

// Create a simple template loader with one template
$loader = new ArrayLoader([
    'index' => 'Hello {{ name }}! Welcome to the Restaurant App.',
]);

// Initialize Twig
$twig = new Environment($loader);

// Render the template
echo $twig->render('index', ['name' => 'Nelson']);
