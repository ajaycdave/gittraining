<?php


require_once __DIR__.'/bootstrap.php';
 
$parameters = [
'calendar' => 'Calendar',
];



// Render our view
echo $twig->render('calendar.html.twig', $parameters);

?>