<?php

class Vehiculo {

    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function mostrar() {
        return "Marca: " . $this->marca .
        "<br>Modelo: " . $this->modelo;
    }
}
