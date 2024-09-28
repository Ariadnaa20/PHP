<?php
class Shape {
    protected $color;
    protected $filled;

    public function __construct($color = "vermell", $filled = true) {  //tenen valora ja predefinirts 
        $this->color = $color;
        $this->filled = $filled;
    }

    public function toString() {
        return "Forma: color=" . $this->color . ", omplert=" . ($this->filled ? "sí" : "no") . "]";
    }
    
}
?>