<?php
require_once 'DosDimensiones.php';
// la calse trangle ve de dos dimensions
//tambe ve de dos dimensions i afegeix el atribut estil i impelmeta calcArea i un metode per mosrtar el estil del traingle
class Triangulo extends DosDimensiones {
    private $estilo;

    // Constructor
    public function __construct($base, $altura, $nombre, $estilo) {
        parent::__construct($base, $altura, $nombre);  
        $this->estilo = $estilo;
    }

    
    public function getEstilo() {
        return $this->estilo;
    }

    public function setEstilo($estilo) {
        $this->estilo = $estilo;
    }

   
    public function calcArea() {
        return ($this->getBase() * $this->getAltura()) / 2;
    }

   
    public function mostrarEstilo() {
        echo "El trianfle te:" . $this->estilo . "<br>";
    }
}
?>