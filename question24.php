<?php
function convertLastThreeUpper($str) {
    $len = strlen($str);
    
    if ($len < 3) {
        return strtoupper($str); 
    } else {
        $front = substr($str, 0, $len - 3); 
        $last = strtoupper(substr($str, -3)); 
        return $front . $last;
    }
}

echo convertLastThreeUpper("Nepal") . "<br>";     
echo convertLastThreeUpper("Npl") . "<br>";       
echo convertLastThreeUpper("Bca") . "<br>";       
echo convertLastThreeUpper("Bachelor") . "<br>";  
?>
