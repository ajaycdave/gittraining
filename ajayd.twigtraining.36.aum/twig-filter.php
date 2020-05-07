<?php
require_once __DIR__ .'/bootstrap.php';

$parameters = [
	'my_var' => 'Hello world !!!',
	'foo'    => 'Test Twig Template file',
	'number' => 5
];

// Render our view
echo $twig->render('twig-filter.html.twig', $parameters);

?>