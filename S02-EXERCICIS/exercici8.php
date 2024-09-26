<?php

function sumaProducteCapICua($numero) {
    // Convertim el número de tipus enter a una cadena per poder accedir a cada xifra individualment
    $numeroString = strval($numero); //convertir de int a string

    // Inicialitzem les variables per calcular la suma i el producte de les xifres
    $suma = 0;
    $producte = 1;
    
    for ($i = 0; $i < strlen($numeroString); $i++) {
       
        $xifra = intval($numeroString[$i]);

        
        $suma += $xifra; // Afegim la xifra a la variable suma

        $producte *= $xifra;
    }
    
    // Mostrem els resultats de la suma i el producte de les xifres
    echo "La suma de les xifres de $numero és: $suma<br>";
    echo "El producte de les xifres de $numero és: $producte<br>";

   
    $reves = strrev($numeroString);  //aquesta funcio el que fa es reverteixim els caracters
    if ($numeroString === $reves) {
        
        echo "$numero és cap-i-cua.<br>"; // Si el número original és igual al número al revés, és cap-i-cua
    } else {
    
        echo "$numero no és cap-i-cua.<br>";
    }
}
sumaProducteCapICua(1221);




?>