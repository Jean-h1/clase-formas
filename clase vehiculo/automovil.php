<?php

require_once __DIR__ . '/vehiculo.php';

class Automovil extends Vehiculo {

    private $puertas;

    public function __construct($marca, $modelo, $puertas) {
        parent::__construct($marca, $modelo);
        $this->puertas = $puertas;
    }

    public function mostrar() {
        return parent::mostrar() .
       "<br>Puertas: " . $this->puertas;
    }
}
