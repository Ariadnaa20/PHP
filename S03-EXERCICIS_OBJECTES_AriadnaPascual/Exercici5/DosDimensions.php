<?php
//clase dos dimensions


// Clase abstracta DosDimensiones
//es una clase abstracta q te els atributs base altura i nom i te els seus setters i getters i el metode abstracte calcArea

abstract class DosDimensiones {
    private $base;
    private $altura;
    private $nombre;

    // Constructor
    public function __construct($base, $altura, $nombre) {
        $this->base = $base;
        $this->altura = $altura;
        $this->nombre = $nombre;
    }

    // Getters y setters com ajava 
    public function getBase() {
        return $this->base;
    }

    public function setBase($base) {
        $this->base = $base;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    
    public function mostrarDimension() {
        echo "La base es: " . $this->base . " i la Altura es: " . $this->altura . "<br>";
    }

    //metode abstracte de calcular area
    abstract public function calcArea();
}

