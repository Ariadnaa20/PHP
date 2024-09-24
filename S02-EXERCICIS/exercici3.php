<?php

$url = "https://gracia.sallenet.org/login/index.php";

//amb substrings

$iniciNomFitxer = strrpos($url, '/') + 1; //poscio despres del ultim /

$finalNomFitxer = strrpos($url, '.php');  //posicio del punt

$nomFitxer = substr($url, $iniciNomFitxer, $finalNomFitxer - $iniciNomFitxer);

echo "Nom del fitxer (usant substrings): " . $nomFitxer . "<br>";




// amb explore 


$parts = explode('/', $url);  // agafariam la posicio 4
$fitxerComplet = end($parts); // Agafem l'última part (index.php)

// Ara dividim el nom del fitxer complet per punt ('.')
$nomFitxer = explode('.php', $fitxerComplet)[0]; //trec el php

// Imprimir el resultat amb explode
echo "Nom del fitxer (usant explode): " . $nomFitxer . "\n";
?>