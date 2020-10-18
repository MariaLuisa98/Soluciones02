<?php

/*Realizar y probar una  función que genere el código HTML de tablas con un 
  borde determinado, incluyendo en cada casilla el mismo texto. 

function generarHTMLTable ( $filas, $columnas, $borde,$contenido){

} */

function generarHTMLTable ( $filas, $columnas, $borde,$contenido){
    
    echo "<table style=\" border:$borde". "px solid black; border-collapse:collapse; \">";
    for ($i = 0; $i < $filas; $i ++) {
        echo "<tr  style=\" border:$borde". "px solid black; border-collapse:collapse; \">";
        for ($j = 0; $j < $columnas; $j ++) {
            echo "<td style=\" border:$borde". "px solid black; border-collapse:collapse; \"> $contenido </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
    
generarHTMLTable(rand(1,10),rand(1,10),rand(1,10),"Hola Mundo");

?>