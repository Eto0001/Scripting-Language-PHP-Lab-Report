<?php

function findStringIndex($array, $str) {
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $str) {
            return $i;
        }
    }
    return -1;
}

$fruits = ["apple", "banana", "mango", "orange"];
$search = "mango";

$index = findStringIndex($fruits, $search);

if ($index !== -1) {
    echo "The string '$search' is at index: $index";
} else {
    echo "The string '$search' was not found in the array.";
}
?>
