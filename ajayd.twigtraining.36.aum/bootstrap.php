<?php

// Load our autoloader
require_once __DIR__ .'/vendor/autoload.php';
require_once 'training_twig_extension.php';

use Twig\Extra\Html\HtmlExtension;
use Twig\Extra\Inky\InkyExtension;
use Twig\Extra\Intl\IntlExtension;
use Twig\Extra\Markdown\MarkdownExtension;

// Specify our Twig templates location
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/templates');
$filter = new \Twig\TwigFilter('rot13',

function ($string) {
		return str_rot13($string);
	});
$customlower = new \Twig\TwigFilter('customlower', function ($string) {
		return strtolower($string);
	});

$contactstring = new \Twig\TwigFunction('contactstring', function ($string) {
		return str_rot13($string);
	});

// Instantiate our Twig
$twig = new \Twig\Environment($loader, [
		'debug' => true,
	]);

$twig->addFilter($filter);
$twig->addFilter($customlower);
$twig->addFunction($contactstring);

$twig->addExtension(new \Twig\Extension\DebugExtension());
$twig->addExtension(new IntlExtension());
$twig->addExtension(new HtmlExtension());
$twig->addExtension(new MarkdownExtension());
$twig->addExtension(new InkyExtension());
$twig->addExtension(new Training_Twig_Extension());



?>