<?php
$n = "12";
$students = array(
    "rahim",
    "karim",
    123,
    "monir"
);

$student[2] = "Shafiq";

//var_dump($student);

//$student = array_shift($students);

$students[] = "Jamal"; // adds elememt at last
array_push($students, "Kamal"); // adds elememt at last

$n = count($students);
for ($i = 0; $i < $n; $i++){
    echo $students[$i] . "\n";
}

// for ($i = $n-1; $i >= 0; $i--){
//     echo $student[$i] . "\n";
// }

//array_shift() remove 1st element
//array_unshift() adds an element at first
//array_push() adds elememt at last
//array_pop() remove last element






?>