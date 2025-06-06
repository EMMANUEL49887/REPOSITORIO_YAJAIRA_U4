<?php
// Clase base para todas las figuras
abstract class Figura {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    abstract public function obtenerArea();
    abstract public function obtenerVolumen(); // Solo se usa en figuras 3D

    public function obtenerNombre() {
        return $this->nombre;
    }

    public function __toString() {
        return "Figura: " . $this->nombre;
    }
}