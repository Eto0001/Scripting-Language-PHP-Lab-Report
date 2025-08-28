<?php

function calculateArea($base, $height, $shape) {
    if (strtolower($shape) === "triangle") {
        return 0.5 * $base * $height;
    } elseif (strtolower($shape) === "parallelogram") {
        return $base * $height;
    } else {
        return "Invalid shape! Please use 'triangle' or 'parallelogram'.";
    }
}

echo "Triangle area (base=10, height=5): " . calculateArea(10, 5, "triangle") . "<br>";
echo "Parallelogram area (base=10, height=5): " . calculateArea(10, 5, "parallelogram");
?>
