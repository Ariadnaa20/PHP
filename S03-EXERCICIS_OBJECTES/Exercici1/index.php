<?php
//el require once es per evitar duplicats aseguyra q el arxiu s'inclueixi una sola vegada
require_once 'Vehiculo.php';
require_once 'Terrestre.php';
require_once 'Maritimo.php';

// Crear un objeto de Terrestre
$terrestre = new Terrestre("KSSK899", 120, 80, 4, 300, true);
echo "Tarda en 100 km: " . $terrestre->calcularTiempo(100) . " horas\n";

// Crear un objeto de Maritimo
$maritimo = new Maritimo("JSNSA7", 300, 40, 30, 20, 2);
echo "Precio: " . $maritimo->calcularPrecio() . " unidades.\n";
?>
