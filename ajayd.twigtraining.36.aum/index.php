<?php


require_once __DIR__.'/bootstrap.php';
 $a = array(array('username'=>'ajaydave'),array('username'=>'hetdave'),array('username'=>'darshan'));
   $ao = new ArrayObject($a);
 
$parameters = [
'my_var' => 'Hello world !!!',
'users' =>$ao,
'foo'=>'Test Twig Template file'
];



// Render our view
echo $twig->render('index.html.twig', $parameters);

?>