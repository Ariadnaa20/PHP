<?php
require_once 'Serie.php'; 

class DeDos implements Serie {
    private $iniciar;
    private $valor;

   
    public function __construct($iniciar = 0) {
        $this->iniciar = $iniciar;
        $this->valor = $iniciar;
    }

 
    public function getSiguiente() {
        $this->valor += 2;
        return $this->valor;
    }

   
    public function reiniciar() {
        $this->valor = $this->iniciar;
    }

   
    public function setComenzar($n) {
        $this->iniciar = $n;
        $this->valor = $n;
    }

    
    public function getAnterior() {
        $this->valor -= 2;
        return $this->valor;
    }

   
    public static function tipoDeSerie() {
        echo "Esta es una serie de 2.<br>";
    }
}
?>
