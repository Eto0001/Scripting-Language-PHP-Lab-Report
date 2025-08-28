<?php

function recursiveStrLen($str) {
    if ($str === "") {
        return 0;
    } else {
        return 1 + recursiveStrLen(substr($str, 1));
    }
}

$text = "Prem Adhikari";
echo "The length of '$text' is: " . recursiveStrLen($text);
?>
