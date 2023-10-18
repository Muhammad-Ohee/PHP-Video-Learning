<?php
$nunber = range(41,80);
$random = mt_rand(0,39);

echo $nunber[$random] . "\n";

shuffle($nunber);
print_r($nunber);

$fruits = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'dates');
shuffle($fruits); //remove keys 
//print_r($fruits);

$fruits = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'dates');
$key = array_rand($fruits); //return a random key from associative array
echo "Key {$key} => " . $fruits[$key];


?>