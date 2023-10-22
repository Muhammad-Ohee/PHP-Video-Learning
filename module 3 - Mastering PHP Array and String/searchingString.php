<?php
$string = "Quick brown Brown Fox fox jumps other the lazy dog";

$offset = strpos($string, "Quick"); //case sensitive
//$offset = stripos($string, "Quick"); //case insensitive

//$offset = strrpos($string, "Quick"); //case sensitive reverse
//$offset = strripos($string, "Quick"); //case insensitive reverse

$offset = strpos($string, "fox", 12); //case sensitive with starting position

//echo $offset;

if($offset !== false){
    echo "word was found." . "\n";
}else{
    echo "word was not found." . "\n";
}


$replacedString = str_replace("fox", "Fox", $string); //case sensitive
$replacedString = str_ireplace("fox", "Fox", $string); //case insensitive
$replacedString = str_replace("fox", "Fox", $string, $count); //case sensitive
echo $replacedString . ". " . $count . "\n";

// for multiple replace 
$replacedString = str_ireplace(array("brown", "fox"), array("Red", "Cat"), $string); //case insensitive
echo $replacedString;

?>