<?php
class Vehiculo {
    protected $matricula; 
    protected $potencia;
    protected $velocidadMedia;

    public function __construct($matricula, $potencia, $velocidadMedia) {
        $this->matricula = $matricula;
        $this->potencia = $potencia;
        $this->velocidadMedia = $velocidadMedia;
    }

    public function calcularTiempo($distancia) {
        if ($this->velocidadMedia > 0) { // es this es pq accedeixo a l'atribut Velocidad del objecte vehicle 
            return $distancia / $this->velocidadMedia;
        } else {
            return "Velocidad media no valida";
        }
    }
}
?>
//els contructiors sempre es public function __construct(....)
// les funcions o metodes sempre son public function NomFunció(parametre)