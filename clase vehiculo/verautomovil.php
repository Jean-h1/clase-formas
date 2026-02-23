<?php

require_once __DIR__ . "/vehiculo";

$marca = $_GET['marca'];
$modelo = $_GET['modelo'];
$puertas = $_GET['puertas'];

$auto = new Automovil($marca, $modelo, $puertas);

echo $auto->mostrar();
