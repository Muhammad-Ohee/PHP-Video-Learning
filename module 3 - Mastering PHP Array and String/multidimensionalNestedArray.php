<?php
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  array_push($cars[3], "Ohee");
  echo $cars[3][3] . "\n";
  print_r($cars);



?>