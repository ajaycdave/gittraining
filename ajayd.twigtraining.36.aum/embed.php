<?php


require_once __DIR__.'/bootstrap.php';

$parameters = [
'my_var' => 'Hello world !!!',
'foo'=>'Test Twig Template file'
];


// Render our view
echo $twig->render('foo.twig', $parameters);

?>