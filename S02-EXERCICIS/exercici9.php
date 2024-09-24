<?php
function removeValueFromArray($array, $value) {
    $newArray = []; // Creamos un nuevo array vacío

    // Recorremos cada elemento del array original
    foreach ($array as $item) {
        // Usamos un if para verificar si el elemento no es igual al valor a eliminar
        if ($item !== $value) {
            $newArray[] = $item; // Agregamos el elemento al nuevo array
        }
    }

    return $newArray; // Devolvemos el nuevo array sin el valor eliminado
}

// Ejemplo de uso
$originalArray = [1, 2, 3, 4, 5, 3, 6];
$valueToRemove = 3;

$newArray = removeValueFromArray($originalArray, $valueToRemove);

// Imprime el nuevo array
print_r($newArray);
?>
