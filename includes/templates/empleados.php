<div class="planes">
   <h2>Conoce Nuestros <span class="span">Empleados</span></h2>
</div>

<div class="empleados"> 
<?php 
    // Realizar la consulta para obtener los planes
    $consulta = obtenerdatoemp();
    
    // Verificar si se obtuvieron resultados
    if ($consulta) {
        // si se encontraron resultados escribir sobre los resultados y mostrarlos
        while ($fila = mysqli_fetch_assoc($consulta)) {

            //se hace un div para cada plan
            echo "<div class='emp-item'>";

            //se extrae y muestra el nombre del plan 
            echo "<h3>" . $fila['nombre'] . "</h3>";

            echo "<h2>" . $fila['ocupacion'] . "</h2>";

            //se extrae y muestra el precio del plan 
            echo "<p>Cedula: " . $fila['dni'] . "</p>";

            //se extrae y muestra la descripcion del plan del plan 
            echo "<p>Correo:  " . $fila['correo'] . "</p>";

            echo "<p>Fecha De Nacimiento:  " . $fila['fecha_nacimiento'] . "</p>";

            //se cierra el div
            echo "</div>";
        }

        //si no se encuentran resultados 
    } else {
        echo "No se encontraron empleados.";
    }
    ?>

</div>
