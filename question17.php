<?php
function computeSum($a, $b) {
    if ($a === $b) {
        return 3 * ($a + $b);
    } else {
        return $a + $b;
    }
}

echo "Sum of (5, 10): " . computeSum(5, 10) . "<br>";  
echo "Sum of (7, 7): " . computeSum(7, 7) . "<br>";     
?>
