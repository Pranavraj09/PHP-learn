<!-- <?php
$weekday = 7;
switch($weekday){
    case 1:
        echo("today is monday<br>");
        break;
    case 2:
        echo("today is tuesday<br>");
        break;
    case 3:
        echo("today is wednesday<br>");
        break;
    case 4:
        echo("today is thursday<br>");
        break;
    case 5:
        echo("today is friday<br>");
        break;
    case 6:
        echo("today is saturday<br>");
        break;
    case 7:
        echo("today is sunday<br>");
        break;
    default:
        echo("Invalid day<br>");
        break;    
}
?> -->
<?php
$age = 9;
switch (true){
    case ($age >= 18 && $age <= 21):
        echo("you are eligible<br>");
        break;
    case ($age >=22):
        echo("you are major<br>");
        break;
    default:
        echo("you are minor<br>");
        break;
}
?>