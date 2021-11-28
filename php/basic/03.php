<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y, $rifat;
   $rifat = "Rajdip"; 
  $z = $x + $y;
  echo $z;
}

myTest();
echo $rifat ;
?>