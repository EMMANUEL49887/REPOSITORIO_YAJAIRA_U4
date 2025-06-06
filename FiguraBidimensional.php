<?php
require_once __DIR__ . '/Figura.php';

abstract class FiguraBidimensional extends Figura {
    public function obtenerVolumen() {
        return 0; // Las figuras 2D no tienen volumen
    }
}