<meta charset="utf-8" />
<?php

/*
 * Escribe un programa que multiplique los 20 primeros
 * números naturales.
 * Utilize el bucle while.
 * */

$numero = 1;
$contador = 2;
while($contador <= 20){

    // $numero = $numero * $contador
    $numero *= $contador;

    echo $numero."<br/>";

    $contador++;
}

echo "El reresultado de multiplicar los 20 primeros números es: ".$numero;

?>