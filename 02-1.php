<?php
require_once("02.php");

$num1=random_int(1,10);
$num2=random_int(1,10);

echo "Primer número: $num1 <br> Segundo número: $num2 <br> <br>";

echo Suma($num1,$num2)."<br>";
echo Resta($num1,$num2)."<br>";
echo Division($num1,$num2)."<br>";
echo Modulo($num1,$num2)."<br>";
echo Potencia($num1,$num2)."<br>";

?>
