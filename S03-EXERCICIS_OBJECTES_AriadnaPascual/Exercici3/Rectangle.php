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

    //funcions nomes de calcular AREA
    public function calcArea() {
        return $this->base * $this->altura;
    }


    //funcions nomes de Calcular perimetre
    public function calcPerimetro() {
        return 2 * ($this->base + $this->altura);
    }

    //funcins de calcular Diagonal
   
    public function calcDiagonal() {
        return sqrt(pow($this->base, 2) + pow($this->altura, 2));
    }
}
?>