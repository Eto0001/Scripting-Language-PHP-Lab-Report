<?php

function minutesToSeconds($minutes) {
    return $minutes * 60;
}

$minutes = 5;
echo "$minutes minutes = " . minutesToSeconds($minutes) . " seconds";
?>
