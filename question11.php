<?php

function isDivisibleByFive($number) {
    if ($number % 5 == 0) {
        return true;
    } else {
        return false;
    }
}

$num1 = 25;
$num2 = 14;

echo $num1 . " = " . (isDivisibleByFive($num1) ? "true" : "false") . "<br>";
echo $num2 . " = " . (isDivisibleByFive($num2) ? "true" : "false");
?>
