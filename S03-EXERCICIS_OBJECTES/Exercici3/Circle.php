<?php
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
        return "Cercle, radi" . $this->radius . ", " . parent::toString() . "]";
    }
}
?>
