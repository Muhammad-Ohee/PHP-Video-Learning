<?php
$numbers = array(1,2,3,4);
//this utiliy function will not change the main array rather than return something or work something

//array_walk() ---- not return
function sqr($number){
    //echo $number * $number . "\n";
    printf("sqr of %d is %d \n", $number, $number*$number);
}
array_walk($numbers, 'sqr');

//array_map() ---- will return something
function cube($number){
    return $number * $number * $number;
}
$cube_array = array_map('cube', $numbers);
print_r($cube_array);

//array_filter() ----- will return (true or false)
function even($number){
    return $number % 2 == 0;
}
function odd($number){
    return $number % 2 != 0;
}
$even_array = array_filter($numbers, 'even');
$odd_array = array_filter($numbers, 'odd');
print_r($even_array);
print_r($odd_array);

$persons = array('sujon', 'kabir', 'sabab', 'selim', 'roni', 'jamal', 'kamal', 'sayma');
function filterByS($name){
    return $name[0] == 's';
}
$nameStartsWithS = array_filter($persons, 'filterByS');
print_r($nameStartsWithS);



?>