<?php
$vegetables = array('brinjal', 'brocolli', 'carrot', 'capsicam', 'potato', 'onion', 'ginger', 'garlic', 'lentil');
$random = array('a' => 10, 'b' => 20, 'c' => 30, 'd' => 40, 'e' => 50, 'f' => 60, 12 => 78, 'g' => 80);

// $someVegetables1 = array_slice($vegetables, 0, 3);
// $someVegetables2 = array_slice($vegetables, 3, null, true);

// $newVegetables = array_merge($someVegetables1, $someVegetables2);

// print_r($someVegetables1);
// print_r($someVegetables2);
// print_r($newVegetables);

// $newVegetables = $someVegetables1 + $someVegetables2;
// print_r($newVegetables);

$r1 = array_slice($random, 0, 2);
$r2 = array_slice($random, 4, null, true);
$r3 = array('j'=>45, 'k'=>18);

$randomData = array_splice($random, 2, 2, array('j'=>45, 'k'=>18));
$randomDataCorrectWay = $r1 + $r3 + $r2;

//print_r($randomData);
print_r($randomDataCorrectWay);
?>