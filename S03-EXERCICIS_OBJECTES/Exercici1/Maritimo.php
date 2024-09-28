<?php
require_once 'Vehiculo.php';

class Maritimo extends Vehiculo {
    private $esloraTotal;
    private $esloraFlotacion;
    private $numHelices;

    public function __construct($matricula, $potencia, $velocidadMedia, $esloraTotal, $esloraFlotacion, $numHelices) {
        parent::__construct($matricula, $potencia, $velocidadMedia);
        $this->esloraTotal = $esloraTotal;
        $this->esloraFlotacion = $esloraFlotacion;
        $this->numHelices = $numHelices;
    }

    public function calcularPrecio() {
        return 2500 * $this->esloraTotal * $this->potencia * $this->numHelices;
    }
}
?>
