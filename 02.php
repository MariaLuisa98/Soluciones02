<?php

/*Definir dos variables asign�ndoles un valor entero aleatorio 
 * entre 1 y 10, mostrar su suma, su resta, su divisi�n, 
 * su multiplicaci�n, su m�dulo y su potencia (ciclo for), 
 * Crea un archivo llamado funcionesvar.php donde est�n definidas 
 * las cinco operaciones: suma, resta, divisi�n, producto, m�dulo y 
 * potencia. Incluir ese fichero dentro de 
 * fichero principal (require_once) y 
 * llamar  a las funciones para obtener el resultado.
 */

function Suma ($num1,$num2) {
    $suma=$num1+$num2;
    echo "$num1+$num2 = ";
    return $suma;  
}

function Resta ($num1,$num2) {
    $resta=$num1-$num2;
    echo "$num1-$num2 = ";
    return $resta;
}

function Division ($num1,$num2) {
    $division=$num1/$num2;
    echo "$num1/$num2 = ";
    return $division;
}

function Modulo ($num1,$num2) {
    $modulo=$num1%$num2;
    echo "$num1%$num2 = ";
    return $modulo;
}

function Potencia ($num1,$num2) {
    $potencia=1;
    for ($i=1;$i<$num2;$i++) {
        $potencia=$potencia*$num1;
    }
    echo "$num1<sup>$num2</sup> = ";
    return $potencia;
}

?>

