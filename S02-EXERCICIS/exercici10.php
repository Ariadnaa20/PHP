<?php
function digitCountAndSum($value) {
    // Comprobar si el valor es un número
    if (!is_numeric($value)) {
        return "El valor no es un número.";
    }

    // Convertir el número a una cadena para poder iterar sobre sus dígitos
    $valueString = strval(abs($value)); // Usamos abs() para manejar números negativos
    $digitCount = strlen($valueString); // Contar el número de dígitos
    $sum = array_sum(str_split($valueString)); // Sumar los dígitos usando str_split y array_sum

    return [
        'count' => $digitCount,
        'sum' => $sum,
    ];
}

// Ejemplo de uso
$result = digitCountAndSum(12345);
echo "Número de dígitos: " . $result['count'] . "<br>";
echo "Suma de los dígitos: " . $result['sum'] . "<br>";

$result = digitCountAndSum(-6789);
echo "Número de dígitos: " . $result['count'] . "<br>";
echo "Suma de los dígitos: " . $result['sum'] . "<br>";

$result = digitCountAndSum("abc");
echo $result; // Esto debería mostrar que no es un número
?>
