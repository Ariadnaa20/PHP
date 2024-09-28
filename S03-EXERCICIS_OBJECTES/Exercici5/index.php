<?php
require_once 'Triangulo.php';
require_once 'Cuadrado.php';
//exemple d'us  en triange i el cuadrat

$triangulo = new Triangulo(5, 10, "Triangle", "Isóceles");
$triangulo->mostrarDimension();
$triangulo->mostrarEstilo();
echo "El area del triangle es  " . $triangulo->calcArea() . "<br>";

$cuadrado = new Cuadrado(8, 8, "Cuadrado");
$cuadrado->mostrarDimension();
echo "El area del cjuadt " . $cuadrado->calcArea() . "<br>";
echo "Segur q es un cuadrat? " . ($cuadrado->esCuadrado() ? "Sí" : "No") . "<br>"; //es com si fos un if

?>