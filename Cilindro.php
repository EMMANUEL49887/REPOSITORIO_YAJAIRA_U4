<?php
require_once __DIR__ . '/FiguraTridimensional.php';

class Cilindro extends FiguraTridimensional {
    private $radio, $altura;

    public function __construct($radio, $altura) {
        parent::__construct("Cilindro");
        $this->radio = $radio;
        $this->altura = $altura;
    }

    public function obtenerArea() {
        return 2 * pi() * $this->radio * ($this->radio + $this->altura);
    }

    public function obtenerVolumen() {
        return pi() * pow($this->radio, 2) * $this->altura;
    }

    public function __toString() {
        return parent::__toString() . " - Área: " . $this->obtenerArea() . " - Volumen: " . $this->obtenerVolumen();
    }
}