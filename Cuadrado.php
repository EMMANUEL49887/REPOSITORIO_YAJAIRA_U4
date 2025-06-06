<?php
require_once __DIR__ . '/Cuadrilátero.php';

class Cuadrado extends Cuadrilátero {
    public function __construct($lado) {
        parent::__construct("Cuadrado", $lado, $lado);
    }

    public function obtenerArea() {
        return pow($this->lado1, 2);
    }

    public function __toString() {
        return parent::__toString() . " - Área: " . $this->obtenerArea();
    }
}