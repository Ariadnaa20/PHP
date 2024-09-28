<?php
//Ara fem un un cercle  
$circle= new Circle(5, "blue", true);
echo $circle->toSting() . "\n"
echo "area de cerce" . $circle->getArea() . "\n";
echo "perimetri " . $circle->getPerimeter() . "\n";

//Ara un rectangle 
$rectangle = new Rectangle(4, 5, "green", false);
echo $rectangle->toString() . "\n";
echo "area del rectangle: " . $rectangle->getArea() . "\n";
echo "perimetro del rectangle" . $rectangle->getPerimeter() . "\n";
echo "diagonal del rectanfe: " . $rectangle->getDiagonal() . "\n";

// Crear un cuadrat
$square = new Square(4, "groc", true);
echo $square->toString() . "\n";
echo "area del cuadraf: " . $square->getArea() . "\n";
echo "permimetre del cuadrat: " . $square->getPerimeter() . "\n";
?>
