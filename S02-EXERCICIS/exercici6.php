<?php

function suma($a, $b) {
    return $a + $b;
}


function resta($a, $b) {
    return $a - $b;
}


function multiplicacio($a, $b) {
    return $a * $b;
}


function divisio($a, $b) {
    if ($b == 0) {
        return "No es pot dividir entre 0!";
    } else {
        return $a / $b;
    }
}

// Definir dos números a la teva elecció
$num1 = 10;
$num2 = 5;

// Cridar les funcions i imprimir els resultats amb salts de línia <br>
echo "Suma de $num1 i $num2: " . suma($num1, $num2) . "<br>";
echo "Resta de $num1 i $num2: " . resta($num1, $num2) . "<br>";
echo "Multiplicació de $num1 i $num2: " . multiplicacio($num1, $num2) . "<br>";
echo "Divisió de $num1 i $num2: " . divisio($num1, $num2) . "<br>";
