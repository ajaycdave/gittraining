<?php

// Load our autoloader
require_once __DIR__.'/vendor/autoload.php';
use Twig\Extra\Intl\IntlExtension;
use Twig\Extra\Html\HtmlExtension;

// Specify our Twig templates location
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');

// Instantiate our Twig
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());
$twig->addExtension(new IntlExtension());
$twig->addExtension(new HtmlExtension());

?>