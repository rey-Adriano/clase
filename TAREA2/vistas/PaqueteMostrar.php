<?php
include_once "controladores/PaqueteControlador.php";

$paqueteControlador = new PaqueteControlador();
$resultado = $paqueteControlador->mostrar();

foreach ($resultado as $paquete) {
    echo "<li>".$paquete["descripcion"]."</li>";
}

