<?php
// logical operator
$a=22;
// if ($a >= 18 && $a <= 21) {
//     echo ("you are eligible<br>");
// }
// if ($a >= 18 || $a <= 21) {
//      echo ("you are eligible<br>");
//  }
// if (!($a <= 18)) {
//      echo ("you are eligible<br>");
//  }
if ($a >= 18 xor $a <= 21) {
    echo ("you are eligible<br>");
}
?>