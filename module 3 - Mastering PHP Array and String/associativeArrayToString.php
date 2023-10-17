<?php
$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => '13',
    'class' => 10,
    'section' => 'B',
);

print_r($student);

echo $student['fname'] . " " . $student['lname'] . "\n";

printf("%s %s \n", $student['fname'], $student['lname']);  //good practice

//serialize()
$serialized = serialize($student);
echo $serialized;
echo "\n";
$unserialized = unserialize($serialized);
print_r($unserialized);



//json_decode() and json_encode()
$jsondata = json_encode($student);
echo $jsondata;
echo "\n";
$jsondataDecode = json_decode($jsondata); //converts string to object
$jsondataDecode = json_decode($jsondata, true); //converts string to array
print_r($jsondataDecode);


?>