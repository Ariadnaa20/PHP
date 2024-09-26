<?php
class Rectangulo {
    // Atributs clase
    private $base;
    private $altura;

    // constructor clase 
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    //funcions
    public function calcArea() {
        return $this->base * $this->altura;
    }

    
    public function calcPerimetro() {
        return 2 * ($this->base + $this->altura);
    }

   
    public function calcDiagonal() {
        return sqrt(pow($this->base, 2) + pow($this->altura, 2));
    }
}


?>