<?php
// while loop
$a = 1;
while ($a <= 10) {
    echo "a = ",$a;
    echo "\n";
    $a++;
}
// for loop
for ($i=0; $i < 6 ; $i++) { 
    echo "Loving you alos  a losing game for you ", $i ;
    echo "\n";
}
// do while loop
$x = 1;

do {
  echo "The number is: $x \n";
  $x++;
} while ($x <= 5);

// foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value \n";
}