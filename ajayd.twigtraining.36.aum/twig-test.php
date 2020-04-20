<?php
require_once __DIR__.'/bootstrap.php';

define(PUBLISHED,"published"); 
$parameters = [
'my_var' => array('Hello world','ddf','asdf','asdfasd','dfasdf'),
'foo'=>'Test Twig Template file',
'number'=>5
];




// Render our view
echo $twig->render('twig-test.html.twig', $parameters);

?>