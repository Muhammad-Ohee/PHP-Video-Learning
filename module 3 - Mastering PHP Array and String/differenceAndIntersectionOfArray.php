<?php
$numbers1 = array(1,4,3,66,54,7,23,1,2);
$numbers2 = array(88,3,21,4,3,28,1,2,7);
$numbers3 = array(88,3,4);

$vegetables1 = array('a' => 'brinjal', 'b' => 'Brocolli', 'carrot', 'capsicam', 'potato', 'c' => 'onion', 'ginger', 'garlic', 'lentil');
$vegetables2 = array('z' => 'brinjal', 'y' => 'Brocolli', 'carrot', 'capsicam', 'potato', 'x' => 'onion', 'ginger', 'garlic', 'lentil');

$common = array_intersect($numbers1, $numbers2, $numbers3);
print_r($common);

$commonFruits = array_intersect($vegetables1, $vegetables2); //common values for 1st array
$commonFruits = array_intersect_assoc($vegetables1, $vegetables2); //common keys for 1st array
print_r($commonFruits);

$arrDif = array_diff($numbers1, $numbers2); //set A - set B
print_r($arrDif);
$arrDif = array_diff($vegetables1, $vegetables2); //set A - set B with value
print_r($arrDif);
$arrDif = array_diff_assoc($vegetables1, $vegetables2); //set A - set B with key
print_r($arrDif);

?>