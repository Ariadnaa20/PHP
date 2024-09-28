<?php
class Square extends Rectangle {
    public function __construct($side, $color = "vermell", $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function toString() {
        return "Quadrat, costat=" . $this->width . ", " . parent::toString() . "]";
    }
}
?>