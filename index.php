<?php
    require 'vehiculos/claseVehiculo.php';

    session_start();

    if (!isset($_SESSION['vehiculos'])) {
        $_SESSION['vehiculos'] = [];

        $vehiculo = new Vehiculo("1234ABC", "Seat", "Leon", "Blanco", "S");
        array_push($_SESSION['vehiculos'], $vehiculo);
        
        $vehiculo = new Vehiculo("2345CCV", "Ford", "Fiesta", "Rojo", "N");
        array_push($_SESSION['vehiculos'], $vehiculo);

        $vehiculo = new Vehiculo("6574FMB", "Renault", "Megane", "Negro", "N");
        array_push($_SESSION['vehiculos'], $vehiculo);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>
</head>

<body>
    <h1>Taller</h1>

    <div>
        <p><a href="vehiculos/listaVehiculos.php">Vehículos</a></p>
    </div>

</body>
</html>