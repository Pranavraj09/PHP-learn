<?php
// $a=10;
// $b=18;
// if($a < $b){
//     echo ("$a is less than $b <br>");
// }
// echo "all are ohkk"
// if($a > $b):
//     echo ("$a is greater than $b");
// endif
// if and else statement
$a=14;
if($a>=18){
    echo("yo are eligible to vote<br>");
}else{
    echo("you are not eligible to vote<br>");
}
?>
<?php
$name = "John";
$gender = "male";
if ($gender == "male"){
    echo "Hello Mr. $name<br>";
}
else {
    echo "Hello Ms. $name<br>";
}
?>
<!-- if elseif -->
 <?php
 $a =29;
 if($a <18){
    echo("you are minor<br>");
 }else if($a == 18){
    echo("you are eligible to vote<br>");
}
else {
    echo("you are major<br>");
 }
 ?>