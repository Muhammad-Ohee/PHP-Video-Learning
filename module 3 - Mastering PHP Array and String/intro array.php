<?php
$n = "12";
$student = array(
    "rahim",
    "karim",
    123,
    "monir"
);

$student[2] = "Shafiq";

//var_dump($student);

$n = count($student);
for ($i = 0; $i < $n; $i++){
    echo $student[$i] . "\n";
}

// for ($i = $n-1; $i >= 0; $i--){
//     echo $student[$i] . "\n";
// }




?>