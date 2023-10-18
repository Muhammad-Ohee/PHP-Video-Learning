<?php
echo ord('a') . "\n"; //return ascii index
echo chr(65) . "\n"; //retrun ascii value

echo "capital letters\n";
for ($x = 65; $x < 123; $x++){
    echo "The char is: " . chr($x) . "\n";
    //echo $x . "\n";
    if($x == 90){
        echo "\n";
        echo "small letters\n";
        echo "\n";
    }
    if($x == 90){
        $x=96;
    }   
}

?>