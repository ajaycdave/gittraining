<?php

require_once __DIR__ .'/bootstrap.php';
$a  = array(array('username' => 'ajaydave'), array('username' => 'hetdave'), array('username' => 'darshan'));
$ao = new ArrayObject($a);

$pattern = "/ca[kf]e/";
$text    = "He was eating cakeg in the cafe.";
if (preg_match($pattern, $text)) {
	$mathstring = "Match found!";
} else {
	$mathstring = "Match not found.";
}

$matches = preg_match_all($pattern, $text, $array);
$matches .= " matches were found.";

$pattern     = "/\s/";
$replacement = "-";
$text        = "Earth revolves around\nthe\tSun";
// Replace spaces, newlines and tabs
echo preg_replace($pattern, $replacement, $text);
echo "<br><br>";
// Replace only spaces
echo str_replace(" ", "-", $text).'<br>';
$pattern = "/[\s,]+/";
$text    = "My favourite colors are red, green and blue";
$parts   = preg_split($pattern, $text);

// Loop through parts array and display substrings
foreach ($parts as $part) {
	echo $part."<br>";
}
$pattern = "/^J/";
$names   = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);

// Loop through matches array and display matched names
foreach ($matches as $match) {
	echo $match."<br>";
}

$pattern = "/^color/im";
$text    = "Color red is more visible than \ncolor blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches." matches were found.".'<bR>';

$pattern     = '/\bcar\w*/';
$replacement = '<b>$0</b>';
$text        = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
echo preg_replace($pattern, $replacement, $text).'<br>';

// Declare a regular expression
$regex = '/^[a-zA-Z ]*$/';

// Declare a string
$nameString = 'Sharukh khan';

// Use preg_match() function to
// search string pattern
if (preg_match($regex, $nameString)) {
	echo ("Name string matching with"
		." regular expression");
} else {
	echo ("Only letters and white space"
		." allowed in name string");
}

$parameters = [
	'my_var'      => 'Hello world !!!',
	'users'       => $ao,
	'matchstring' => $mathstring,
	'mathchall'   => $matches,
	'foo'         => 'Test Twig Template file'
];

// Render our view
//echo $twig->render('demo_expression.html.twig', $parameters);

?>