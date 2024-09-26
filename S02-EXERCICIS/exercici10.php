<?php
function comptarDigitsISuma($valor) {
    
    if (!is_numeric($valor)) {
        return "El valor no número.";
    }
    $valorString = strval(abs($valor)); 
    $numDigits = strlen($valorString); 
    $suma = array_sum(str_split($valorString)); 

    return [
        'comptador' => $numDigits,
        'suma' => $suma,
    ];
}

$resultat = comptarDigitsISuma(12345);
echo "Nombre de dígits: " . $resultat['comptador'] . "<br>";
echo "Suma dels dígits: " . $resultat['suma'] . "<br>";

$resultat = comptarDigitsISuma(-6789);
echo "Nombre de dígits: " . $resultat['comptador'] . "<br>";
echo "Suma dels dígits: " . $resultat['suma'] . "<br>";

$resultat = comptarDigitsISuma("abc");
echo $resultat; 
?>
