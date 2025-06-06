<?php
require_once __DIR__ . '/FiguraBidimensional.php';

class Rectángulo extends FiguraBidimensional {
    protected $base;
    protected $altura;

    public function __construct($base, $altura) {
        parent::__construct("Rectángulo");
        $this->base = $base;
        $this->altura = $altura;
    }

    public function obtenerArea() {
        return $this->base * $this->altura;
    }

    public function __toString() {
        return parent::__toString() . " - Área: " . $this->obtenerArea();
    }
}