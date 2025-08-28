<?php
function fourCopies($str) {
    if (strlen($str) < 2) {
        return $str; 
    } else {
        $front = substr($str, 0, 2); 
        return str_repeat($front, 4); 
    }
}

echo fourCopies("C Sharp") . "<br>"; 
echo fourCopies("JS") . "<br>";    
echo fourCopies("a") . "<br>";      
?>
