<?php
class Vehiculo {
    //vehicle
    protected $matricula; //es protected ja que es millor i terrestre els podra agafar pq es herencia 
    protected $potencia;
    protected $velocidadMedia;


// constructor clase
    public function __construct($matricula, $potencia, $velocidadMedia) {
        $this->matricula = $matricula;
        $this->potencia = $potencia;
        $this->velocidadMedia = $velocidadMedia;
    }

    //tasca2
    public function calcularTiempo($distancia) {
        if ($this->velocidadMedia > 0) {
            // Tiempo = distancia / velocidadMedia
            return $distancia / $this->velocidadMedia;
        } else {
            return "Velocidad media no válida.";
        }
    }

}


class Terrestre extends Vehiculo {
    private $numRuedas;
    private $capacidadMaletero;
    private $railesCarretera;

    // Constructor de la clase Terrestre
    public function __construct($matricula, $potencia, $velocidadMedia, $numRuedas, $capacidadMaletero, $railesCarretera) { //els de vehicle i seus 

        parent::__construct($matricula, $potencia, $velocidadMedia); //crida al constructor de Vehicle

        $this->numRuedas = $numRuedas;
        $this->capacidadMaletero = $capacidadMaletero;
        $this->railesCarretera = $railesCarretera;
    }
}


class Maritimo extends Vehiculo {
    
    private $esloraTotal;
    private $esloraFlotacion;
    private $numHelices;

    public function __construct($matricula, $potencia, $velocidadMedia, $esloraTotal, $esloraFlotacion, $numHelices) {//els seus i els del vechicle

        parent::__construct($matricula, $potencia, $velocidadMedia);
        $this->esloraTotal = $esloraTotal;
        $this->esloraFlotacion = $esloraFlotacion;
        $this->numHelices = $numHelices;
    }

    
    public function calcularPrecio() {
        return 2500 * $this->esloraTotal * $this->potencia * $this->numHelices;
    }
}

$terrestre = new Terrestre("KSSK899", 120, 80, 4, 300, true);
echo "Tarda en 100 km: " . $terrestre->calcularTiempo(100) . " horas\n";

// Creación de un vehículo marítimo
$maritimo = new Maritimo("JSNSA7", 300, 40, 30, 20, 2);
echo "Precio: " . $maritimo->calcularPrecio() . " unidades monetarias\n";







?>