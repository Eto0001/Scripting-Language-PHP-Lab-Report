<?php

function getValueByIndex($array, $index) {
    if (isset($array[$index])) {
        return $array[$index];
    } else {
        return "Invalid index!";
    }
}

$colors = ["red", "green", "blue", "yellow"];

echo "Value at index 2: " . getValueByIndex($colors, 2) . "<br>";   
echo "Value at index 5: " . getValueByIndex($colors, 5);            
?>
