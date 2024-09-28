<?php

require_once 'Rectangle.php'

$rect1 = new Rectangulo(2, 4); 
$rect2 = new Rectangulo(6, 12);  
$rect3 = new Rectangulo(7, 15);  

//1
echo "rectangle1: <br>";
echo "area: " . $rect1->calcArea() . "<br>";
echo "perimetre: " . $rect1->calcPerimetro() . "<br>";
echo "diagonal: " . $rect1->calcDiagonal() . "<br><br>";

//2
echo "rectangle 2: <br>";
echo "area: " . $rect2->calcArea() . "<br>";
echo "perimetre: " . $rect2->calcPerimetro() . "<br>";
echo "diagonal: " . $rect2->calcDiagonal() . "<br><br>";

//3
echo "rectangle 3: <br>";
echo "area: " . $rect3->calcArea() . "<br>";
echo "perimetre: " . $rect3->calcPerimetro() . "<br>";
echo "diagonal: " . $rect3->calcDiagonal() . "<br><br>";

?>
