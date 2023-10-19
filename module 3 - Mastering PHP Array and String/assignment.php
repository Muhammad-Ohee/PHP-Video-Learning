<?php
$string = "Hello World,World How are you";
$string2 = "Quick brown fox jumps over the lazy dog";

$partByPart = str_split($string);
//$partByPart = str_split($string2);

$charCounts = array();

foreach ($partByPart as $char){
    if(array_key_exists($char, $charCounts)){
        $charCounts[$char] = $charCounts[$char] + 1;
    }else{
        $charCounts[$char] = 1;
    }
}

foreach($charCounts as $key => $value){
    echo $key . " : " . $value . "\n";
}


// //echo "Full Array \n";
// $partByPart = str_split($string);
// //print_r($partByPart);
// $len = count($partByPart);

// $unique_array = array_unique($partByPart);
// $unique_array_len =  count($unique_array);
// //echo "Unique Array \n";
// //print_r($unique_array);

// function countCherecterTimes(string $c, array $array, int $len){
//     $count = 0;
//     for($i=0; $i<$len; $i++){
//         if($array[$i] == $c){
//             $count += 1;
//         }
//     }
//     return $count;
// }

// $finalarray = array();
// for($i=0; $i<$unique_array_len; $i++){
//     //echo $unique_array[$i] . "\n";
//     $cTimes = countCherecterTimes($unique_array[$i], $partByPart, $len);
//     //$emptyArray[$unique_array[$i]] = $cTimes;
//     echo "char {$unique_array[$i]} is " . $cTimes . " times\n";
// }



?>