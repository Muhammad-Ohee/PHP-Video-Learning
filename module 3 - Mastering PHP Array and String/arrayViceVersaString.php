<?php
//explode Strint to Array

$vegetables = explode(', ', 'brinjal, brocolli, carrot, capsicam');
//delimeter = separator

var_dump($vegetables);

//for multiple delimeter
$vegetables = preg_split('/(, |,)/', 'brinjal, brocolli, carrot, capsicam,potato,onion,ginger, lentil');
print_r($vegetables);

//implode Array to String
$vegetables_string = implode(', ', $vegetables);
//or
$vegetables_string = join(', ', $vegetables);

var_dump($vegetables_string);

?>