<?php

function largestNumber($a, $b, $c) {
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

echo "Largest of (10, 25, 15): " . largestNumber(10, 25, 15) . "<br>";
echo "Largest of (50, 20, 30): " . largestNumber(50, 20, 30) . "<br>";
echo "Largest of (7, 7, 3): " . largestNumber(7, 7, 3) . "<br>";
?>
