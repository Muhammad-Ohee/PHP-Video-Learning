<?php
$vegetables = array('a' => 'brinjal', 'b' => 'Brocolli', 'carrot', 'capsicam', 'potato', 'c' => 'onion', 'ginger', 'garlic', 'lentil');
$numbers = array(1, 11, 2, 56, 3, 4, 22, 77, 5);

//echo in_array(4, $numbers, true);

$offset = array_search(4, $numbers);
//echo $offset;

echo key_exists('b', $vegetables);

?>