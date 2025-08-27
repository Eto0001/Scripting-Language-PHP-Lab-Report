<?php

function triangleArea($base, $height) {
    return 0.5 * $base * $height;
}

$base = 10;
$height = 5;

echo "Base: $base, Height: $height <br>";
echo "Area of Triangle = " . triangleArea($base, $height);
?>
