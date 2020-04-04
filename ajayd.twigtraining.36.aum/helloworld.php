<?php


require_once __DIR__.'/bootstrap.php';

$parameters = [
'my_var' => 'Hello world !!!',
'foo'=>'Test Twig Template file Test tempalte changes in stages'
];


// Render our view
echo $twig->render('helloworld.html.twig', $parameters);

?>