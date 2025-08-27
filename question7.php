<?php

function calculatePower($voltage, $current) {
    return $voltage * $current;
}

$voltage = 220;  
$current = 5; 

echo "Voltage: $voltage V <br>";
echo "Current: $current A <br>";
echo "Power = " . calculatePower($voltage, $current) . " Watts";
?>
