<?php

/*Hacer una nueva versi�n  del ejercicio anterior pero creando 
  un nuevo fichero de funciones donde cada funci�n tenga tres par�metros 
  los dos primeros por valor y el �ltimo por referencia. 
  A�adir al principio dentro del programa principal la instrucci�n 
  include_once() para hacer referencia a las funciones definidas */

function Suma ($num1,$num2,&$resu) {
    $resu=$num1+$num2;
}

function Resta ($num1,$num2,&$resu) {
    $resu=$num1-$num2;
}

function Division ($num1,$num2,&$resu) {
    $resu=$num1/$num2;
}

function Modulo ($num1,$num2,&$resu) {
    $resu=$num1%$num2;
}

function Potencia ($num1,$num2,&$resu) {
    $resu=1;
    for ($i=1;$i<$num2;$i++) {
        $resu=$resu*$num1;
    }
}

?>
