<?php
require_once __DIR__ . '/Cuadrilátero.php';

class Trapecio extends Cuadrilátero {
    private $baseMayor, $baseMenor, $altura;

    public function __construct($baseMayor, $baseMenor, $altura) {
        parent::__construct("Trapecio", 0, 0);
        $this->baseMayor = $baseMayor;
        $this->baseMenor = $baseMenor;
        $this->altura = $altura;
    }

    public function obtenerArea() {
        return (($this->baseMayor + $this->baseMenor) * $this->altura) / 2;
    }

    public function __toString() {
        return parent::__toString() . " - Área: " . $this->obtenerArea();
    }
}