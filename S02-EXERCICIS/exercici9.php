<?php
function esborrarValor($llista, $valor) {
    $novaLlista = [];    
    foreach ($llista as $element) {
       
        if ($element !== $valor) {
            $novaLlista[] = $element; 
        }
    }

    return $novaLlista; 
} $llistaOriginal = [1, 2, 3, 4, 5, 3, 6];
$valorEliminar = 3;

$novaLlista = esborrarValor($llistaOriginal, $valorEliminar);

print_r($novaLlista);
?>
