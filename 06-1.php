<html>
<?php

/* 2� Versi�n: La muralla se genera con  im�genes de ladrillos, de piedras o algo similar. */

$num=random_int(1,10);

echo "N�mero introducido: $num <br>";

for ($i = 0; $i < 3; $i ++) {
    if ($i == 2) {
        for ($m = 0; $m < (($num) + ($num - 1)); $m ++) {
            echo "<img src=\"ladrillo.jpg\" alt=\"ladrillo \"/>";
        }
    } else {
        for ($h = 0; $h < $num; $h ++) {
            echo "<img src=\"ladrillo.jpg\" alt=\"ladrillo \"/>" . "<img src=\"espacio.jpg\" alt=\"espacio \"/>";
        }
    }
    echo "<br/>";
}

?>
</html>

