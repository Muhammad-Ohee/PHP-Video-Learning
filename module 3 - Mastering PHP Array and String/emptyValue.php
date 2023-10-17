<?php
$name = 0;

if(isset($name)){
    echo "Name is set";
}else{
    echo "Name is not set";
}

echo "\n";

if(empty($name)){
    echo "Name is empty";
}else{
    echo "Name is not empty";
}

echo "\n";
if(isset($name) && (is_numeric($name) || $name != '')){
    echo "name is set and not empty";
}else{
    echo 'name is either not set or it\'s empty';
}


?>