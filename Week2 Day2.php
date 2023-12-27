<?php

/*
Program 1 : Program in PHP to print the table of 2
            I'm Using for Loop for this Purpose
*/

for ($i=1; $i <=10 ; $i++) {
    echo "2 X {$i} = " . $i * 2 . "<br>";
    echo "\n";
}

/*
Program 2 : Program in PHP to search the number
            Variable $number have a value
            We compare the value inside variable using multiple statements
*/
$number = 3;
if ($number == 1) {
    echo "Number is :" . $number . "<br>";
} elseif($number == 2) {
    echo "Number is :" . $number . "<br>";
} elseif($number == 3) {
    echo "Number is :" . $number . "<br>";
} elseif($number == 4) {
    echo "Number is :" . $number . "<br>";
} elseif($number == 5) {
    echo "Number is :" . $number . "<br>";
} else{
    echo "Number not Found! <br>";
}

/*
Program 2 : Program in PHP to search the number
            Variable $number have a value
            We compare the value inside variable using switch statements
            break statement is used to break the switch statement
*/

switch ($number) {
    case 1:
        echo "Number is :" . $number . "<br>";
        break;
    case 2:
        echo "Number is :" . $number . "<br>";
        break;
    case 3:
        echo "Number is :" . $number . "<br>";
        break;
    case 4:
        echo "Number is :" . $number . "<br>";
        break;
    case 5:
        echo "Number is :" . $number . "<br>";
        break;
    default:
        echo "Number not Found! <br>";
        break;
}

?>