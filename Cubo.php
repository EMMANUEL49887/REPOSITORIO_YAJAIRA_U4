<?php
require_once __DIR__ . '/FiguraTridimensional.php';

class Cubo extends FiguraTridimensional {
    private $lado;

    public function __construct($lado) {
        parent::__construct("Cubo");
        $this->lado = $lado;
    }

    public function obtenerArea() {
        return 6 * pow($this->lado, 2);
    }

    public function obtenerVolumen() {
        return pow($this->lado, 3);
    }

    public function __toString() {
        return parent::__toString() . " - Área: " . $this->obtenerArea() . " - Volumen: " . $this->obtenerVolumen();
    }
}