<?php
$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => '13',
    'class' => 10,
    'section' => 'B',
);


// //Copy By Value or Deep Copy
// $newStudent = $student;
// $newStudent['fname'] = 'Rahim';
// $newStudent['lname'] = 'Karim';

// print_r($student);
// print_r($newStudent);

// echo "===========\n";
// //Copy By Reference or Shallow Copy
// $newStudent = &$student;
// $newStudent['fname'] = 'Rahim';
// $newStudent['lname'] = 'Karim';

// print_r($student);
// print_r($newStudent);


function printData(&$student){
    $student['fname'] .= " Changed";
    print_r($student);
}

printData($student);
print_r($student);

?>