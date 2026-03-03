<?php

class formas {
    protected $nombre;

    public function __constructor ($nombre)
    {
        $this-> nombre = $nombre;
    }

    public function dibujar (): variant_mod{

    echo "Dibujo una forma generica";
    }

    public function obtenerNombre (): mixed

    {
        return $this->nombre
    }

    

    



}