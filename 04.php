<html>
<style>
table,td { border:1px solid black; border-collapse:collapse; }
</style>
<?php

/*Realizar un programa en php que genere 50 n�meros aleatorios en 
  1 y 100 y que muestre en una tabla  html el valor m�ximo, 
  el m�nimo y la media. */


$num=random_int(1,100);

$minimo=$num;
$maximo=$num;
$media=$num;

 echo "<table>";
 
 echo "<tr style=background-color:black;color:white;font-weight:bold>";
 echo "<td colspan=2 style=padding-left:30px;padding-right:30px;text-align:center> Generaci�n de 50 valores aleatorios </td>";
 echo "</tr>";
 
 for ($i=1;$i<=49;$i++) {
   $num=random_int(1,100);
   
   if ($num>$maximo) {
       $maximo=$num;
   } 
   if ($num<$minimo) {
       $minimo=$num;
   }
   $media=$media+$num;
 } 
 
 $media=$media/50;
 echo "<tr>";
 echo "<td> M�nimo </td>";
 echo "<td style=text-align:right> $minimo </td>";
 echo "</tr>";
 
 echo "<tr>";
 echo "<td> M�ximo </td>";
 echo "<td style=text-align:right> $maximo </td>";
 echo "</tr>";
 
 echo "<tr>";
 echo "<td> Media </td>";
 echo "<td style=text-align:right> $media </td>";
 echo "</tr>";
 
 echo "</table>";   
 
?>
</html>


