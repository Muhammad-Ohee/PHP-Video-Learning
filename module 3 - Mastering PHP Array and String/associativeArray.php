<?php
$students = [
    '12' => 'Hasan',
    '13' => 'Korim',
    '14' => 'Jamal',
    '15' => 'Ohee',
];

//echo $students['15'];

foreach($students as $key=>$value){
    echo $key . " = " . $value . "\n";
}

echo "\n";

$students['15'] = $students['15'] . ", Sinziah";
//$students['15'] .= ", Sinziah";

foreach($students as $key=>$value){
    echo $key . " = " . $value . "\n";
}

$keys = array_keys($students);
print_r($keys);

// for($i=0; $i<count($keys); $i++){
//     $key = $keys[$i];
//     echo $students[$key] . "\n";
// }

$values = array_values($students);
print_r($values);

?>