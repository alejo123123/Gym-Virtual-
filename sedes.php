<?php

require 'includes/config/database.php'; // Se incluye el archivo de configuración de la base de datos
require 'includes/app.php'; // Se incluye el archivo principal de la aplicación
include 'includes/templates/header.php'; // Se incluye el encabezado de la página

// Establecer conexión a la base de datos utilizando la función conectar() definida en database.php
$db = conectar(); // Se almacena la conexión en la variable $db
?>
<body>


<div class="margen">
    <!-- sedes -->
    <div class="sedees">
    <h1>Nuestras Sedes</h1>
    <div class="sed">
    <?php 

    // Realizar la consulta para obtener las sedes
    $consulta = obtenerdatosedes();
    
    // Verificar si se obtuvieron resultados

    if ($consulta) {

        // si se encontraron resultados escribir sobre los resultados y mostrarlos
        while ($fila = mysqli_fetch_assoc($consulta)) {

            //se hace un div para cada sede
            echo "<div class='plan-sedes'>";

            //se extrae y muestra el nombre de las sedes
            echo "<h3>" . $fila['nombre'] . "</h3>";

            //se extrae y muestra el telefono 
            echo "<p>Telefono:  " . $fila['telefono'] . "</p>";

            //se extrae y muestra la direccion
            echo "<p>Direccion:   " . $fila['direccion'] . "</p>";

            //se cierra el div
            echo "</div>";
        }

        //si no se encuentran resultados 
    } else {
        echo "No se encontraron sedes.";
    }
    ?>


        </div>
    </div>


    <div class="elemento3">
    <?php 

    $consulta = obtenerdatosedes2();
    // Verificar si se obtuvieron resultados
    if ($consulta) {
        // si se encontraron resultados escribir sobre los resultados y mostrarlos
        while ($fila = mysqli_fetch_assoc($consulta)) {

            //se hace un div para la 3 sede
            echo "<div class='plan-sedes2'>";

            //se extrae y muestra el nombre 
            echo "<h3>" . $fila['nombre'] . "</h3>";

            //se extrae y muestra el telefono 
            echo "<p>Telefono:  " . $fila['telefono'] . "</p>";

            //se extrae y muestra la direccion
            echo "<p>Direccion:   " . $fila['direccion'] . "</p>";

            //se cierra el div
            echo "</div>";
        }

        //si no se encuentran resultados 
    } else {
        echo "No se encontraron sedes.";
    }
    ?>

    
    
    </div>
</div>
    <!-- footer -->
<footer class="footer">
 <p>Powered By AlejoTyson</p>
</footer>
</body>
</html>