<?php
$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => '13',
    'class' => 10,
    'section' => 'B',
);


print_r($student);
unset($student['section']);
print_r($student);


?>