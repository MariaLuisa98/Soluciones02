<html>
<code>
<?php

/* Generar un número entre 1 y 10 y mostrar una muralla de asteriscos 
   con tantas almenas como indique el usuario. Nota: una almena está formada 
   dos filas de cuatro asterisco, y entre almena y almena hay un espacio. */

$num=random_int(1,10);

echo "Número introducido: $num <br>";

for ($i=1;$i<=$num;$i++) {
    echo "****";
    echo " ";
}

echo "<br>";

for ($i=1;$i<=$num;$i++) {
    echo "****";
    echo " ";
}

echo "<br>";

for ($i=1;$i<=$num*5-1;$i++) {
    echo "*";
}

?>
</code>
</html>

