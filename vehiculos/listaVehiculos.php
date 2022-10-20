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
    <title>Listado Vehiculos</title>
</head>

<body>
    <h1>Listado de Vehiculos</h1>

    <h4>
        <a href="../index.php">Volver al Inicio</a>
    </h4>

    <table>
        <tr>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Revisado</th>
            <th colspan="2"><a href="nuevoVehiculo.php">Nuevo Vehiculo</a></th>
        </tr>

        <?php

            echo "<br/>";

            $vehiculos = $_SESSION['vehiculos'];
            foreach ($vehiculos as $i => $vehiculo) {

                echo "<tr>";

                    echo "<td>" . $vehiculo->get_matricula() . "</td>";
                    echo "<td>" . $vehiculo->get_marca() . "</td>";
                    echo "<td>" . $vehiculo->get_modelo() . "</td>";
                    echo "<td>" . $vehiculo->get_color() . "</td>";
                    echo "<td>" . $vehiculo->get_revisado() . "</td>";
                    echo "<td>";
                        echo "<form action='' method='post'>";
                        echo "<input type='submit' value='Revisar'></button>";
                        echo "<input type='hidden' name='posicion_vehiculo' value=" . $i . ">";
                        echo "</form>";
                    echo "</td>";
                    echo "<td>";
                        echo "<form action='modificarVehiculo.php' method='post'>";
                        echo "<input type='submit' value='Editar'></button>";
                        echo "<input type='hidden' name='posicion_vehiculo' value=" . $i . ">";
                        echo "</form>";
                    echo "</td>";

                    echo "<td>";
                        echo "<form action='borrarVehiculo.php' method='post'>";
                        echo "<input type='submit' value='Borrar'></button>";
                        echo "<input type='hidden' name='posicion_vehiculo' value=" . $i . ">";
                        echo "</form>";
                    echo "</td>";

                echo "</tr>";
            }
        ?>

    </table>

    <br/>

    <a href="borrarTodos.php">Eliminar todos</a>
</body>

</html>