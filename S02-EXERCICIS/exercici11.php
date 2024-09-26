<?php
function trobarCadenaMesLlarga($llista) {
    if (empty($llista)) {
        return "La llista està buida.";
    }

    $mesLlarga = '';

    
    foreach ($llista as $cadena) {
       
        if (is_string($cadena) && strlen($cadena) > strlen($mesLlarga)) {
            $mesLlarga = $cadena; 
        }
    }

    return $mesLlarga ?: "No hi ha cadenes en la llista."; 
}


$llista = ["poma", "plàtan", "kiwi", "síndria", "raïm"];
$mesLlarga = trobarCadenaMesLlarga($llista);
echo "La cadena més llarga és: " . $mesLlarga . "<br>";

$llistaBuida = [];
$mesLlarga2 = trobarCadenaMesLlarga($llistaBuida);
echo $mesLlarga2 . "<br>"; 
?>
