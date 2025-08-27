<?php
$integerVar = 25;
$floatVar = 12.75;
$stringVar = "Hello PHP!";
$booleanVar = true;
$arrayVar = array("Apple", "Banana", "Mango");
$nullVar = null;


echo "Using echo:<br>";
echo "Integer: $integerVar <br>";
echo "Float: $floatVar <br>";
echo "String: $stringVar <br>";
echo "Boolean: " . ($booleanVar ? "true" : "false") . "<br>";
echo "Null: "; echo $nullVar; echo "<br><br>";

print "Using print:<br>";
print "Integer: $integerVar <br>";
print "Float: $floatVar <br>";
print "String: $stringVar <br>";
print "Boolean: " . ($booleanVar ? "true" : "false") . "<br>";
print "Null: "; print $nullVar; print "<br><br>";


echo "Array using print_r:<br>";
print_r($arrayVar);
echo "<br><br>";

echo "Array using var_dump:<br>";
var_dump($arrayVar);
echo "<br><br>";

echo "Checking Data Types:<br>";
echo "Integer variable type: " . gettype($integerVar) . "<br>";
echo "Float variable type: " . gettype($floatVar) . "<br>";
echo "String variable type: " . gettype($stringVar) . "<br>";
echo "Boolean variable type: " . gettype($booleanVar) . "<br>";
echo "Array variable type: " . gettype($arrayVar) . "<br>";
echo "Null variable type: " . gettype($nullVar) . "<br>";
?>
