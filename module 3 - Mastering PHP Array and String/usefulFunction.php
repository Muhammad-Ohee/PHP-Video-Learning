<?php
$string = " Hello \n";
$string = ltrim($string, ' ');
$string = rtrim($string, ' ');
$string = trim($string, ' ');
//echo $string;
//echo "Data";

$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
//echo wordwrap($string, 26, "\n", true);
//echo "\n";
// echo wordwrap($string, 26, "<br/>", true); // for website
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";

// $string = "Lorem ipsum dolor sit \namet, consectetur adipiscing \nelit, sed do eiusmod tempor incididunt \nut labore et dolore magna aliqua.";
// echo nl2br($string)

$name = "Abdul Hamid 012345678910";
$parts = sscanf($name, "%s %s %12s");
//print_r($parts);

sscanf($name, "%s %s %12d", $fname, $lname, $mobile);
//echo $mobile;

$hexColor = "#FF2F44";
sscanf($hexColor, "#%2x%2x%2x", $red, $blue, $green); //hex to decimal conersion
echo $red . "\n";
echo $blue . "\n";
echo $green . "\n";

?>