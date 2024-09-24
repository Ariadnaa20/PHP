//manera de comprv ar con la funcion array_unique
<?php
function removeDuplicates($array) {
    // Comprobar si el array está vacío
    if (empty($array)) {
        return "El array está vacío.";
    }

    // Usar array_unique para eliminar duplicados
    $uniqueArray = array_unique($array);

    // Reindexar el array para evitar índices desordenados
    return array_values($uniqueArray);
}

// Ejemplo de uso
$array = ["apple", "banana", "apple", "kiwi", "banana", "grape"];
$newArray = removeDuplicates($array);
echo "Array sin duplicados: ";
print_r($newArray);

$array2 = [];
$newArray2 = removeDuplicates($array2);
echo $newArray2 . "<br>"; // Manejo de array vacío
?>


//manera de ferho sense la funció
<?php
function removeDuplicates($array) {
    // Comprobar si el array está vacío
    if (empty($array)) {
        return "El array está vacío.";
    }

    // Array para almacenar valores únicos
    $uniqueArray = [];
    
    // Recorrer cada elemento del array
    foreach ($array as $value) {
        // Comprobar si el valor no está ya en el array único
        if (!in_array($value, $uniqueArray)) {
            $uniqueArray[] = $value; // Agregar valor al array único
        }
    }

    return $uniqueArray;
}

// Ejemplo de uso
$array = ["apple", "banana", "apple", "kiwi", "banana", "grape"];
$newArray = removeDuplicates($array);
echo "Array sin duplicados: ";
print_r($newArray);

$array2 = [];
$newArray2 = removeDuplicates($array2);
echo $newArray2 . "<br>"; // Manejo de array vacío
?>
