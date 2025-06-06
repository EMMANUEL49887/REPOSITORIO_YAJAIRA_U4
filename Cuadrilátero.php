<?php
require_once __DIR__ . '/FiguraBidimensional.php';

abstract class Cuadrilátero extends FiguraBidimensional {
    protected $lado1, $lado2;

    public function __construct($nombre, $lado1, $lado2) {
        parent::__construct($nombre);
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
    }
}