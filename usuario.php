<?php

echo "Olá mundo. <br><br>";

$numero = 4;
$resto = 0;

$resto = $numero % 2;
if ($resto == 0) {
    echo "O número {$numero} é par.";
} else {
    echo "O número ".$numero . " é impar.";
}

$soma = 0;
$valor1 = 10;
$valor2 = 20;

$valor = $valor1 + $valor2;

$soma1 = $soma + 29;

$soma +=29;

echo "<br><br> A soma dos números {$valor1} + {$valor2} é: <br> soma:{$soma} <br> soma1: {$soma1}.";



switch($resto) {
    case 0 : echo "O número {$numero} é par. <br>";
        break;
    default: echo " O número `{$número} é impar. <br>";
        break;
};

echo "<br><br><br>Laço for.<br><br><br>";


$resto = 0;
$numero = [4, 2, 5, 1, 10, 100, 50, 3, 9, 12];
$resto = $numero % 2;
$contpares = 0;
$i = 0;

//for ($i = 0; $contpares < 5; $i++){
//$resto = $numero[$i] % 2
//    if ($resto == 0) {
//    $contpares++;        
//    }
//}

echo "Data hora início: " . date("d/m/y H:i:s");