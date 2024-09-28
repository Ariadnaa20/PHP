<?php
require_once 'Vehiculo.php';

class Terrestre extends Vehiculo {
    private $numRuedas;
    private $capacidadMaletero;
    private $railesCarretera;

    //impoprtant: al constructor com es herencia poso els seus + el del pare
    public function __construct($matricula, $potencia, $velocidadMedia, $numRuedas, $capacidadMaletero, $railesCarretera) {
        parent::__construct($matricula, $potencia, $velocidadMedia); //aixi es per les variables d'herencia 
        $this->numRuedas = $numRuedas;
        $this->capacidadMaletero = $capacidadMaletero;
        $this->railesCarretera = $railesCarretera;
    }
}
?>
