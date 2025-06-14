<?php
define("num",50);
// define("num",40, true); // This will not change the value of num because constants cannot be redefined
$sum = num + 10; // Using the constant in a calculation
echo "The value of sum is: " . $sum . "<br>";
echo num;
?>