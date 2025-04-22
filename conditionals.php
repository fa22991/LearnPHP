<?php

$age = 18;
if ($age >= 18){
    echo "your age is " . $age . "<br>";
}
elseif($age>15){
    echo "you may enter <br>";
}
else{
    echo "your age is too low <br>";
}

$adult = true;
if($adult){
    echo"you may enter <br>";
}

//logical operators

//&& : both conditions true
//! : not
// || : atleast one condition true

//switch statement

$grade = "A";

switch($grade){
    case "A":
        echo "you did great";
        break;
    case "B":
        echo "you did good";
        break;
    case "C":
        echo "you did okay";
        break;
    default:
        echo "invalid grade";

}

//date(l) => day of the week
$day = date("l");

switch($day){
    case "Monday":
        echo "Magical monday";
        break;
    case "Tuesday":
        echo "Terrific tuesday";
        break;
    case "Wednesday":
        echo "Weeping wednesday";
        break;
    case "Sunday":
        echo "Yayayyyy!!!";
        break;
    default:
        echo "Does it even matter?";
}
?>