<html>
<?php

/* 2º Versión: La muralla se genera con  imágenes de ladrillos, de piedras o algo similar. */

$num=random_int(1,10);

echo "Número introducido: $num <br>";

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

