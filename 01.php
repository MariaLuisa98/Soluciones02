<?php

/* Realizar y probar una funci�n en PHP llamada elMayor
 que reciba tres n�meros: A,B y C.
 La funci�n almacenar� en C el valor que sea mayor A o B.
 En el caso sean iguales almacenar� el valor 0 en C. */

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
    
    echo "N�mero A: ".$A."<br> N�mero B: ".$B."<br>";
    return $C;
}

echo "El n�mero mayor es: ".elMayor(random_int(1,10),random_int(1,10));

?>


