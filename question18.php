<?php
function diff51($n) {
    $diff = abs($n - 51);
    if ($n > 51) {
        return 3 * $diff;
    } else {
        return $diff;
    }
}

echo "n = 30 → Result: " . diff51(30) . "<br>"; 
echo "n = 51 → Result: " . diff51(51) . "<br>"; 
echo "n = 70 → Result: " . diff51(70) . "<br>"; 
?>
