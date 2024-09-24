<?php
function findLongestString($array) {
    // Comprobar si el array está vacío
    if (empty($array)) {
        return "El array está vacío.";
    }

    // Inicializar variables para almacenar el valor más largo
    $longestString = '';

    // Recorrer el array
    foreach ($array as $string) {
        // Comprobar si el elemento actual es una cadena y si es más largo que el anterior
        if (is_string($string) && strlen($string) > strlen($longestString)) {
            $longestString = $string; // Actualizar el valor más largo
        }
    }

    return $longestString ?: "No hay cadenas en el array."; // Retornar el resultado o un mensaje si no hay cadenas
}

// Ejemplo de uso
$array = ["apple", "banana", "kiwi", "watermelon", "grape"];
$longest = findLongestString($array);
echo "El valor más largo es: " . $longest . "<br>";

$array2 = [];
$longest2 = findLongestString($array2);
echo $longest2 . "<br>"; // Manejo de array vacío
?>
