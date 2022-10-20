<?php
    require 'claseVehiculo.php';
    session_start();

    $vehiculo = new Vehiculo($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['color'], $_POST['revisado']);
    $posicion_vehiculo = $_POST['pos_vehiculo'];
    $vehiculos = $_SESSION['vehiculos'];

    $vehiculos[$posicion_vehiculo] = $vehiculo;
    $_SESSION['vehiculos'] = $vehiculos;

    header("Location: listaVehiculos.php");

?>