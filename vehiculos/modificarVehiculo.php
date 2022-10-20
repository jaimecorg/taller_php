<?php
    require 'claseVehiculo.php';
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Vehiculo</title>
    <link rel="stylesheet" href="../estilo.css">
</head>

<body>
    <h1>Modificar Vehiculo</h1>

    <?php

        $posicion_vehiculo = $_POST['posicion_vehiculo'];
        $vehiculos = $_SESSION['vehiculos'];

    ?>

    <form action="editarVehiculo.php" method="post">
        <label for="matricula">Matricula</label>
        <input type="text" name="matricula" value="<?php echo $vehiculos[$posicion_vehiculo]->get_matricula(); ?>">
        <input type="hidden" name="pos_vehiculo" value="<?php echo $posicion_vehiculo; ?>">

        <br />

        <label for="marca">Marca</label>
        <input type="text" name="marca" value="<?php echo $vehiculos[$posicion_vehiculo]->get_marca(); ?>">

        <br />

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" value="<?php echo $vehiculos[$posicion_vehiculo]->get_modelo(); ?>">

        <br />

        <label for="color">Color</label>
        <input type="text" name="color" value="<?php echo $vehiculos[$posicion_vehiculo]->get_color(); ?>">

        <br />

        <label for="revisado">Revisado</label>
        <input type="text" name="revisado" value="<?php echo $vehiculos[$posicion_vehiculo]->get_revisado(); ?>">

        <br />
        <br />

        <button type="submit" value="enviar">Modificar Vehiculo</button>

    </form>
</body>

</html>