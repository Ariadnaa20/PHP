<?php

function fibonacci($n) {
    
    $a = 0; //primer numero
    $b = 1; //segon numero
    
    $comptador = 0;

    do {
        echo $b;  //mostra primer 1 
        if ($comptador < $n - 1) {  //si queden numeros per imprimir afegim una coma per separarlos 
            echo ", "; 
        }

        $seguent = $a + $b; //calcula el seguent numero pq suma el a + b 
        $a = $b; // a pasa a ser el antic b 
        $b = $seguent; // i b pasa a ser el nou calculat 

        $comptador++; //
    } while ($comptador < $n); //para cual el fibonacci n

    echo "<br>"; 
}


fibonacci(6); //aixo calculara els 6 
?>
