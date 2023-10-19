<?php
$string = "Hello World,World How are you";
$string2 = "Quick brown fox jumps over the lazy dog";

//echo $string;

$parts_explode = explode(" ",  $string);
print_r($parts_explode);

$original = join(" ", $parts_explode);
echo $original;
echo "\n";
echo "\n";


$parts = strtok($string, " ,");
//echo $parts;
while ($parts !== false){
    echo $parts . "\n";
    $parts = strtok(" ,");
}

echo "\n";
$parts = strtok($string2, " ,");
//echo $parts;
while ($parts !== false){
    echo $parts . "\n";
    $parts = strtok(" ,");
}

$parts_by_preg_split = preg_split("/ |,/", $string); // use // or ~~
$parts_by_preg_split = preg_split("~\s|,~", $string); // (\s = " ")
print_r($parts_by_preg_split);
?>