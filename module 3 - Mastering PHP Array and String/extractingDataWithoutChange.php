<?php
$vegetables = array('brinjal', 'brocolli', 'carrot', 'capsicam', 'potato', 'onion', 'ginger', 'garlic', 'lentil');

$someVegetables1 = array_slice($vegetables, 2, 4, true);
$someVegetables2 = array_slice($vegetables, -7, 4, true);
$someVegetables3 = array_slice($vegetables, -7, -3, true);
print_r($someVegetables1);
print_r($someVegetables2);
print_r($someVegetables3);

$random = array('a' => 10, 'b' => 20, 'c' => 30, 'd' => 40, 'e' => 50, 'f' => 60, 12 => 78, 'g' => 80);
$randomData = array_slice($random, -4, null, true);
print_r($randomData);

?>