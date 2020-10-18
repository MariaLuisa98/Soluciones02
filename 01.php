<?php

/* Realizar y probar una función en PHP llamada elMayor
 que reciba tres números: A,B y C.
 La función almacenará en C el valor que sea mayor A o B.
 En el caso sean iguales almacenará el valor 0 en C. */

function  elMayor ($A,$B) {
    
    if ($A>$B) {
        $C=$A;
    }
    else {
        $C=$B;
    }
    
    if ($A==$B) {
        $C=0;
    }
    
    echo "Número A: ".$A."<br> Número B: ".$B."<br>";
    return $C;
}

echo "El número mayor es: ".elMayor(random_int(1,10),random_int(1,10));

?>


