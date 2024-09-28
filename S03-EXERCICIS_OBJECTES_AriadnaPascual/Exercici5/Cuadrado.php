<?php
require_once 'DosDimensiones.php';
class Cuadrado extends DosDimensiones { // ve de dos dimensions
//te el metode cuadrat per mirar si les dimensions son iguals


    // Constructor
    public function __construct($base, $altura, $nombre) {
        parent::__construct($base, $altura, $nombre);  
    }


    public function calcArea() {
        return $this->getBase() * $this->getAltura();
    }

    public function esCuadrado() { //=== fa que sigui booleà es a dir true o false
        return $this->getBase() === $this->getAltura(); //comprova si base i altura es el mateix
    }
}
?>