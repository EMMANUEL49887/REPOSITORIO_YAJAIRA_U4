<?php
require_once __DIR__ . '/FiguraTridimensional.php';

class Esfera extends FiguraTridimensional {
    private $radio;

    public function __construct($radio) {
        parent::__construct("Esfera");
        $this->radio = $radio;
    }

    public function obtenerArea() {
        return 4 * pi() * pow($this->radio, 2);
    }

    public function obtenerVolumen() {
        return (4/3) * pi() * pow($this->radio, 3);
    }

    public function __toString() {
        return parent::__toString() . " - Área: " . $this->obtenerArea() . " - Volumen: " . $this->obtenerVolumen();
    }
}