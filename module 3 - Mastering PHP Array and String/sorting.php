<?php
$vegetables = array('a' => 'brinjal', 'b' => 'Brocolli', 'carrot', 'capsicam', 'potato', 'c' => 'onion', 'ginger', 'garlic', 'lentil');
$numbers = array(1, 11, 2, 56, 3, 4, 22, 77, 5);

//sort($vegetables); //sorting removing keys based on values //rsort($vegetables) for reverse
//print_r($vegetables);

//asort($vegetables); //sorting with keys based on values //arsort($vegetables) for reverse
//print_r($vegetables);

//ksort($vegetables); //sorting based on keys //krsort($vegetables) for reverse
//print_r($vegetables);

sort($numbers, SORT_STRING);
print_r($numbers);

$fruits = array('apple', 'Apple', 'Banana', 'banana');
//sort($fruits); //case insensitive sort
sort($fruits, SORT_STRING | SORT_FLAG_CASE); //case sensitive sort
print_r($fruits);

?>