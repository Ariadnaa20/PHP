<?php
require_once 'DeDos.php'; 
require_once 'DeTres.php';


$serieDeDos = new DeDos(0);


echo "Serie de 2<br>";
echo "Seguent: " . $serieDeDos->getSiguiente() . "<br>"; // 2
echo "Seguent: " . $serieDeDos->getSiguiente() . "<br>"; // 4
echo "Anterior: " . $serieDeDos->getAnterior() . "<br>"; // 2


$serieDeDos->reiniciar();
echo "Despres dereiniciar " . $serieDeDos->getSiguiente() . "<br>"; // 2


$serieDeDos->setComenzar(10);
echo "Después de setComenzar(10): " . $serieDeDos->getSiguiente() . "<br>"; // 12

// Mostrar el tipo de serie
DeDos::tipoDeSerie();







$serieDeTres = new DeTres(0);


echo "Serie de 3:<br>";
echo "Seguent " . $serieDeTres->getSiguiente() . "<br>"; // 3
echo "Seguent: " . $serieDeTres->getSiguiente() . "<br>"; // 6
echo "Anterior " . $serieDeTres->getAnterior() . "<br>"; // 3

// Reiniciar la serie
$serieDeTres->reiniciar();
echo "Depres de reiniciar" . $serieDeTres->getSiguiente() . "<br>"; // 3

// Cambiar el valor inicial a 9
$serieDeTres->setComenzar(9);
echo "Desprews de començar: " . $serieDeTres->getSiguiente() . "<br>"; // 12

// Mostrar el tipo de serie es :: perque es com una herencia de la clase pare Serie (interfaz)
DeTres::tipoDeSerie();
?>
