<?php

//array
$colors = ["vermell", "blau", "verd", "groc", "taronja"];

$resultat = ""; //variable buida

//bucle for com a java 
for ($i = 0; $i < count($colors); $i++) {
    $resultat .= $colors[$i];  //resultat es 
    
    // Si no és l'últim element afegim una coma 
    if ($i < count($colors) - 1) {
        $resultat .= ", ";
    }
}

// Imprimir la cadena final amb els colors separats per comes
echo "Colors: " . $resultat . "<br>";
?>

