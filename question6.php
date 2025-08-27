<?php

function ageInDays($years) {
    return $years * 365;
}

$ageYears = 20;

echo "Age in years: $ageYears <br>";
echo "Age in days: " . ageInDays($ageYears);
?>
