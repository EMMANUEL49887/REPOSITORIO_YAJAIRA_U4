<?php
require_once __DIR__ . '/Cuadrilátero.php';

class Rombo extends Cuadrilátero {
    private $diagonalMayor, $diagonalMenor;

    public function __construct($diagonalMayor, $diagonalMenor) {
        parent::__construct("Rombo", 0, 0);
        $this->diagonalMayor = $diagonalMayor;
        $this->diagonalMenor = $diagonalMenor;
    }

    public function obtenerArea() {
        return ($this->diagonalMayor * $this->diagonalMenor) / 2;
    }

    public function __toString() {
        return parent::__toString() . " - Área: " . $this->obtenerArea();
    }
}