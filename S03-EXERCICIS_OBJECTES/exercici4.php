<?php
interface Serie {
    public function getSiguiente();
    public function reiniciar();
    public function setComenzar($x);
}

class DeDos implements Serie {
    private $iniciar; 
    private $valor;  

    //constructor per iniciar 
    public function __construct($iniciar) {
        $this->iniciar = $iniciar;
        $this->valor = $iniciar;
    }


   //incrementa el valor
    public function getSiguiente() {
        $this->valor += 2;
        return $this->valor;
    }

   //tornem a iniciar 
    public function reiniciar() {
        $this->valor = $this->iniciar;
    }

    
    public function setComenzar($x) {
        $this->iniciar = $x;
        $this->valor = $x;
    }

    //el valor i el resta 
    public function getAnterior() {
        return $this->valor - 2;
    }

    // el diu el tipus de la serie 
    public static function tipoDeSerie() {
        echo "Es una serie de dos 2\n";
    }
}

class DeTres implements Serie {
    private $iniciar; 
    private $valor;   

    
    public function __construct($iniciar) {
        $this->iniciar = $iniciar; 
        $this->valor = $iniciar;  

   
    public function getSiguiente() {
        $this->valor += 3; 
        return $this->valor;
    }

    
    public function reiniciar() {
        $this->valor = $this->iniciar; 
    }

    
    public function setComenzar($x) {
        $this->iniciar = $x;
        $this->valor = $x;   
    }

    
    public function getAnterior() {
        return $this->valor - 3;
    }

    
    public static function tipoDeSerie() {
        echo "Es una serie de 3\n"; 
    }}
}


    //COMPROVAR QUE FUNCIONE 

echo "Comprovar la clase DeDos:\n";
DeDos::tipoDeSerie(); 
$serieDeDos = new DeDos(0); 
echo "Seguent numero: " . $serieDeDos->getSiguiente() . "\n"; // 2
echo "Seguent núumero: " . $serieDeDos->getSiguiente() . "\n"; // 4
echo "Anterior número: " . $serieDeDos->getAnterior() . "\n"; // 2
$serieDeDos->setComenzar(10); //cambien l'inici a 10
echo "nou inici nou numero: " . $serieDeDos->getSiguiente() . "\n"; // 12

echo "\nComprovar la clase DeTres\n";
DeTres::tipoDeSerie(); 
$serieDeTres = new DeTres(0); // crear clase
echo "Ssegun numero " . $serieDeTres->getSiguiente() . "\n"; // 3
echo "Seguent numero " . $serieDeTres->getSiguiente() . "\n"; // 6
echo "Anterior numero: " . $serieDeTres->getAnterior() . "\n"; // 3
$serieDeTres->setComenzar(15); // cambien l'inici a 15
echo "Nou inici: " . $serieDeTres->getSiguiente() . "\n"; // de 15 puja a 18


?>