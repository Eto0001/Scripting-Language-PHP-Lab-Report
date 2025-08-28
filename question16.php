<?php
function carsNeeded($people) {
    $capacity = 5;
    return ceil($people / $capacity); 
}

echo "People: 11 → Cars needed: " . carsNeeded(11) . "<br>";
echo "People: 25 → Cars needed: " . carsNeeded(25) . "<br>";
echo "People: 5 → Cars needed: " . carsNeeded(5) . "<br>";
?>
