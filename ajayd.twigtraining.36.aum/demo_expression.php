<?php

require_once __DIR__ .'/bootstrap.php';
$a  = array(array('username' => 'ajaydave'), array('username' => 'hetdave'), array('username' => 'darshan'));
$ao = new ArrayObject($a);
echo '------------String Match with preg_match function-----------'.'<bR/>';
$pattern = "/ca[kf]e/";
$text    = "He was eating cakeg in the cafe.";
if (preg_match($pattern, $text)) {
	echo $mathstring = "Match found!";
} else {
	echo $mathstring = "Match not found.";
}
echo '<br/><br/>';
echo '----------No of match count----------------------------------'.'<bR>';

$matches = preg_match_all($pattern, $text, $array);
echo $matches .= " matches were found.".'<br>';

echo '<br/>-------------- Preg replace with String  -----------------'.'<bR>';
echo 'Earth revolves around\nthe\tSun'.'<br/>';
$pattern     = "/\s/";
$replacement = "-";
$text        = "Earth revolves around\nthe\tSun";
// Replace spaces, newlines and tabs
echo '<br>--------------------Replace spaces, newlines and tabs----------<bR>';
echo preg_replace($pattern, $replacement, $text);
// Replace only spaces
echo '<br>---------Replace only spaces----------------</br>';
echo str_replace(" ", "-", $text).'<br>';
$pattern = "/[\s,]+/";
$text    = "My favourite colors are red, green and blue";
$parts   = preg_split($pattern, $text);

echo '<br>----------Loop through parts array and display substrings--------<br/>';
// Loop through parts array and display substrings
foreach ($parts as $part) {
	echo $part."<br>";
}
$pattern = "/^J/";
$names   = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);

echo '<br>---------Loop through matches array and display matched names--------<br/>';
// Loop through matches array and display matched names
foreach ($matches as $match) {
	echo $match."<br>";
}

echo '<br>-------------Exta Example-------------------------------------<br>';

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