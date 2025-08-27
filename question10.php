<?php

function compareStringLengths($string1, $string2) {
    if(strlen($string1) == strlen($string2)) {
        return true;
    } else {
        return false;
    }
}

$str1 = "Hello";
$str2 = "World";

if(compareStringLengths($str1, $str2)) {
    echo "The strings have the same length.";
} else {
    echo "The strings do not have the same length.";
}
?>
