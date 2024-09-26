<?php

class Shape {
    protected $color;
    protected $filled;

    public function __construct($color = "red", $filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function toString() {
        return "Shape[color=" . $this->color . ", filled=" . ($this->filled ? "true" : "false") . "]";
    }
}




class Circle extends Shape {
    private $radius;

    public function __construct($radius = 1.0, $color = "red", $filled = true) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }

    public function toString() {
        return "Circle[radius=" . $this->radius . ", " . parent::toString() . "]";
    }
}


class Rectangle extends Shape {

    //atributos 
    protected $width;
    protected $height;

    public function __construct($width = 1.0, $height = 1.0, $color = "red", $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }

    public function getDiagonal() {
        return sqrt(pow($this->width, 2) + pow($this->height, 2));
    }

    public function toString() {
        return "Rectangle[width=" . $this->width . ", height=" . $this->height . ", " . parent::toString() . "]";
    }
}


//Ara fem un un cercle  
$circle= new Circle(5, "blue", true);
echo $circle->toSting() . "\n"
echo "Área del círculo: " . $circle->getArea() . "\n";
echo "Perímetro del círculo: " . $circle->getPerimeter() . "\n";

//Ara un rectangulo 
$rectangle = new Rectangle(4, 5, "green", false);
echo $rectangle->toString() . "\n";
echo "Área del rectángulo: " . $rectangle->getArea() . "\n";
echo "Perímetro del rectángulo: " . $rectangle->getPerimeter() . "\n";
echo "Diagonal del rectángulo: " . $rectangle->getDiagonal() . "\n";

// Crear un cuadrat
$square = new Square(4, "yellow", true);
echo $square->toString() . "\n";
echo "Área del cuadrado: " . $square->getArea() . "\n";
echo "Perímetro del cuadrado: " . $square->getPerimeter() . "\n";
?>



