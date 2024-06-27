<div class="planes">
<h2>Conoce Nuestras <span class="span">Promociones</span></h2>
</div>

<div class="promociones">
<?php 
    // Realizar la consulta para obtener los planes
    $consulta = obtenerdatoprom();
    
    // Verificar si se obtuvieron resultados
    if ($consulta) {
        // si se encontraron resultados escribir sobre los resultados y mostrarlos
        while ($fila = mysqli_fetch_assoc($consulta)) {

            //se hace un div para cada prom
            echo "<div class='prom-item'>";

            //se extrae y muestra el nombre del prom
            echo "<h3>" . $fila['nombre'] . "</h3>";

            //se extrae y muestra el precio del prom
            echo "<p>Precio: " . $fila['descuento'] . "</p>";

            //se extrae y muestra la descripcion del prom
            echo "<p>Descripcion:  " . $fila['descripcion'] . "</p>";

            //se cierra el div
            echo "</div>";
        }

        //si no se encuentran resultados 
    } else {
        echo "No se encontraron promociones.";
    }
    ?>
</div>