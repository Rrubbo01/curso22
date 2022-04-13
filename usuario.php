<?php

echo "Olá mundo. <br><br>";

$numero = 5;
$resto = 2;

$resto = $numero % 2;
if ($resto == 0) {
    echo "O número {$numero} é par.";
} else {
    echo "O número ".$numero . " é impar.";
}
