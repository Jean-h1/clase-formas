<?php

class Motocicleta {

    public $marca;
    public $modelo;
    public $cilindraje;

    public function __construct($marca, $modelo, $cilindraje) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cilindraje = $cilindraje;
    }

    public function mostrarDatos() {
        return "Marca: " . $this->marca . "<br>" .
               "Modelo: " . $this->modelo . "<br>" .
               "Cilindraje: " . $this->cilindraje;
    }
}