<?php
require_once __DIR__ . '/FiguraBidimensional.php';

class Círculo extends FiguraBidimensional {
    private $radio;

    public function __construct($radio) {
        parent::__construct("Círculo");
        $this->radio = $radio;
    }

    public function obtenerArea() {
        return pi() * pow($this->radio, 2);
    }

    public function __toString() {
        return parent::__toString() . " - Área: " . $this->obtenerArea();
    }
}