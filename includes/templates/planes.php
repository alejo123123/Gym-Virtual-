<div class="planes">
    <h2>Elige Un <span class="span">Plan</span> y Empieza A <span class="span">Entrenar</span></h2>
    <div class="plan">
    <?php 
    // Realizar la consulta para obtener los planes
    $consulta = obtenerdato();
    
    // Verificar si se obtuvieron resultados
    if ($consulta) {
        // si se encontraron resultados escribir sobre los resultados y mostrarlos
        while ($fila = mysqli_fetch_assoc($consulta)) {

            //se hace un div para cada plan
            echo "<div class='plan-item'>";

            //se extrae y muestra el nombre del plan 
            echo "<h3>" . $fila['nombre'] . "</h3>";

            //se extrae y muestra el precio del plan 
            echo "<p>Precio: " . $fila['precio'] . "</p>";

            //se extrae y muestra la descripcion del plan del plan 
            echo "<p>Descripcion:  " . $fila['descripcion'] . "</p>";

            //se cierra el div
            echo "</div>";
        }

        //si no se encuentran resultados 
    } else {
        echo "No se encontraron planes.";
    }
    ?>
    </div>
</div>