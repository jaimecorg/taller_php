<?php
    require 'claseVehiculo.php';
    session_start();

    $posicion_vehiculo = $_POST['posicion_vehiculo'];
    $vehiculos = $_SESSION['vehiculos'];

    unset($vehiculos[$posicion_vehiculo]);
    array_values($vehiculos); // Reordenar el array

    $_SESSION['vehiculos'] = $vehiculos;

    header("Location: listaVehiculos.php");

?>