<?php
    require 'claseVehiculo.php';
    session_start();

    if ($_POST) {
        $vehiculo = new Vehiculo($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['color'], $_POST['revisado']);

        array_push($_SESSION['vehiculos'], $vehiculo);
    }

    header("Location: listaVehiculos.php");

?>