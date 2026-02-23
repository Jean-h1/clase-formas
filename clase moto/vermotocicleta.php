<?php
require_once("motocicleta.php");

$marca = $_POST ["marca"];

$modelo = $_POST ["modelo"];

$cilindraje= $_POST ["cilindraje"];

$moto1 = new motocicleta ($marca, $modelo, $cilindraje);
echo $moto1-> mostrardatos();
?>