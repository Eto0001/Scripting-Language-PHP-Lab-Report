<?php
function addLastChar($str) {
    if (strlen($str) >= 1) {
        $lastChar = substr($str, -1); 
        return $lastChar . $str . $lastChar;
    } else {
        return "String must be at least 1 character long.";
    }
}

echo addLastChar("Red") . "<br>";    
echo addLastChar("Green") . "<br>";  
echo addLastChar("1") . "<br>";      
?>
