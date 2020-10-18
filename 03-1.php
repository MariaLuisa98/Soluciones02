<?php
include_once("03.php");

$num1=random_int(1,10);
$num2=random_int(1,10);

echo "Primer número: $num1 <br> Segundo número: $num2 <br> <br>";

Suma($num1,$num2,$resu);
echo "$num1+$num2 = ".$resu."<br>";

Resta($num1,$num2,$resu);
echo "$num1-$num2 = ".$resu."<br>";

Division($num1,$num2,$resu);
echo "$num1/$num2 = ".$resu."<br>";

Modulo($num1,$num2,$resu);
echo "$num1%$num2 = ".$resu."<br>";

Potencia($num1,$num2,$resu);
echo "$num1<sup>$num2</sup> = ".$resu."<br>";
?>

