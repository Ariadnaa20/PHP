<?php

function sumaProducteCapICua($numero) {
   
    $numeroString = strval($numero); //convertir de int a string
    
    // Inicialitzem variables per a la suma i el producte
    $suma = 0;
    $producte = 1;
    
    // Bucle per recórrer les xifres del número
    for ($i = 0; $i < strlen($numeroString); $i++) {
        
        $xifra = intval($numeroString[$i]);

        $suma += $xifra;
        
        // Multipliquem la xifra al producte
        $producte *= $xifra;
    }
    
    // Imprimim la suma i el producte
    echo "La suma de les xifres de $numero és: $suma<br>";
    echo "El producte de les xifres de $numero és: $producte<br>";
    
    // Comprovem si és cap-i-cua
    $reves = strrev($numeroString);
    if ($numeroString === $reves) {
        echo "$numero és cap-i-cua.<br>";
    } else {
        echo "$numero no és cap-i-cua.<br>";
    }
}

// Exemple d'ús
sumaProducteCapICua(1221); // Prova amb un número cap-i-cua
sumaProducteCapICua(1234); // Prova amb un número que no és cap-i-cua




?>