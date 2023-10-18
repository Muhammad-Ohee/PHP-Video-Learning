<?php
$string = "Hello World";
$strlen = strlen($string) - 1;

//echo gettype($strlen);
//echo substr($string, -11);

for ($x = $strlen; $x >= 0; $x--) {
    echo $string[$x];
}

echo PHP_EOL;

$strlen = strlen($string);
for ($x = 1; $x <= $strlen; $x++) {
    echo $string[$x * -1];
}

echo PHP_EOL;
echo strrev($string);

?>