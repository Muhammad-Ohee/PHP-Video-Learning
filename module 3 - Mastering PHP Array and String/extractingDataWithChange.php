<?php
$vegetables = array('brinjal', 'brocolli', 'carrot', 'capsicam', 'potato', 'onion', 'ginger', 'garlic', 'lentil');

$newFruit = array('jackfruit', 'tamarind');
$someVegetables1 = array_splice($vegetables, 2, 4, $newFruit);


print_r($someVegetables1);
print_r($vegetables);


$random = array('a' => 10, 'b' => 20, 'c' => 30, 'd' => 40, 'e' => 50, 'f' => 60, 12 => 78, 'g' => 80);
$randomData = array_slice($random, -4, null, true);
//print_r($randomData);

?>