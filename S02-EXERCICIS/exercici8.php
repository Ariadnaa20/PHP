<?php

function sumaProducteCapICua($numero) {
    // Convertim el número de tipus enter a una cadena per poder accedir a cada xifra individualment
    $numeroString = strval($numero); //convertir de int a string

    // Inicialitzem les variables per calcular la suma i el producte de les xifres
    $suma = 0;
    $producte = 1;
    
    // Aquest bucle recorre cada xifra del número convertit a string
    for ($i = 0; $i < strlen($numeroString); $i++) {
        // Convertim la xifra individual (caràcter) de nou a número enter
        $xifra = intval($numeroString[$i]);

        // Afegim la xifra a la variable suma
        $suma += $xifra;

        // Multipliquem la xifra per la variable producte
        $producte *= $xifra;
    }
    
    // Mostrem els resultats de la suma i el producte de les xifres
    echo "La suma de les xifres de $numero és: $suma<br>";
    echo "El producte de les xifres de $numero és: $producte<br>";

    // Revertim el número
    $reves = strrev($numeroString); 
    if ($numeroString === $reves) {
        // Si el número original és igual al número al revés, és cap-i-cua
        echo "$numero és cap-i-cua.<br>";
    } else {
        // Si no és igual, llavors no és capi-cua
        echo "$numero no és cap-i-cua.<br>";
    }
}
sumaProducteCapICua(1221);




?>