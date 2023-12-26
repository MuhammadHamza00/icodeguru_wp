<?php
$number3 = 10;
$number2 = 20;
$number1 = 30;

$greatest = $number1;

if ($number2 > $greatest) {
    $greatest = $number2;
}
if ($number3 > $greatest) {
    $greatest = $number3;
}

echo "Greatest Number:" . $greatest;
?>