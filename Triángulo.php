<?php
require_once __DIR__ . '/FiguraBidimensional.php';

class Triángulo extends FiguraBidimensional {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        parent::__construct("Triángulo");
        $this->base = $base;
        $this->altura = $altura;
    }

    public function obtenerArea() {
        return ($this->base * $this->altura) / 2;
    }

    public function __toString() {
        return parent::__toString() . " - Área: " . $this->obtenerArea();
    }
}