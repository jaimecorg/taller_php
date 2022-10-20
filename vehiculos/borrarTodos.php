<?php
    require 'claseVehiculo.php';

    session_start();

    $cochesBorrar = array();
    $_SESSION['vehiculos'] = $cochesBorrar;
    header("Location: listaVehiculos.php");

?>