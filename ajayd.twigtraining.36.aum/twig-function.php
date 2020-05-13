<?php
require_once __DIR__ .'/bootstrap.php';

$category = array("Categroy 1", "Category 2", "Category 3", "Category 4");

$parameters = [
	'my_var'   => 'Hello world !!!',
	'foo'      => 'Test Twig Template file',
	'number'   => 5,
	'category' => $category
];

// Render our view
echo $twig->render('twig-function.html.twig', $parameters);