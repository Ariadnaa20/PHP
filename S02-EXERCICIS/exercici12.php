//manera de comprv ar con la funcion array_unique
<?php
function removeDuplicates($array) {
    //el array si es buit
    if (empty($array)) {
        return "El array está vacío.";
    }

    $uniqueArray = array_unique($array); //unique es per evitar duplicats
    return array_values($uniqueArray);
}

//array
$array = ["apple", "banana", "apple", "kiwi", "banana", "grape"];
$newArray = removeDuplicates($array);
echo "Array sin duplicados: ";
print_r($newArray);

$array2 = [];
$newArray2 = removeDuplicates($array2);
echo $newArray2 . "<br>"; 
?>




//manera de ferho sense la funció 
<?php
function removeDuplicates($array) {
    if (empty($array)) {
        return "El array está vacío.";
    }

    
    $uniqueArray = []; //array per valors unics
    
    // Recorrer cada elemento del array
    foreach ($array as $value) {
        
        if (!in_array($value, $uniqueArray)) {
            $uniqueArray[] = $value; 
        }
    }

    return $uniqueArray;
}


$array = ["apple", "banana", "apple", "kiwi", "banana", "grape"];
$newArray = removeDuplicates($array);
echo "Array sin duplicados: ";
print_r($newArray);

$array2 = [];
$newArray2 = removeDuplicates($array2);
echo $newArray2 . "<br>"; 
?>
