<?php

require 'includes/config/database.php'; // Se incluye el archivo de configuración de la base de datos
require 'includes/app.php'; // Se incluye el archivo principal de la aplicación
include 'includes/templates/header.php'; // Se incluye el encabezado de la página

// Establecer conexión a la base de datos utilizando la función conectar() definida en database.php
$db = conectar(); // Se almacena la conexión en la variable $db
?>

<div class="margen">
<!-- imagen principal -->
<div class="video">
   
         <video autoplay muted loop>
            <source src="src/video/Sony A7S III X Fitness Commercial.mp4" type="video/mp4">
         </video>

</div>

<!-- sedes -->
<div class="sedes">

    <h2>Encuentra la sede <span class="span">más cercana a ti</span></h2>
    <img class='imagenrock' src="src/img/dwayne-johnson-haciendo-ejercicio_2560x1440_xtrafondos.com.jpg" alt="sede">
    <button class="boton" onclick="window.location.href='sedes.php'">Buscar Sedes</button>

</div>



<!-- quien somos -->
<section class="seccion">
<h2>Quienes Somos?<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus corrupti error animi labore esse quos dolor dolores sunt blanditiis possimus aliquid quis deserunt ratione expedita quae recusandae, ex ullam commodi.</p><img  class="logo"  src="src/img/maquina-de-gimnasio.png" alt=""></h2>
<img class="imagenbox"  src="src/img/pexels-cottonbro-4761661.jpg" alt="somos">

</section>

<!-----------------------------
     `    ``               `
      ``  _ `      `       ``
     `   |_| `  `` ``    `  `
    ``  -___-_` `   ` --------------
  ``   /      )      | This is fine |`
 `____/| (0) (0)_()  |/-------------  `
/|   | |   ^____)      ``      ``
||   |_|    \_//     Uɔ````   `` ``
||    || |    |    ========`  ``  ``
||    || |    |      ||     ``   `
||     \\_\   |\     ||   ```    `
=========||====||    ||  ``       `
  || ||   \Ɔ || \Ɔ   ||   ``    ``
  || ||      ||      ||  `     ``
--------------------------------->

<!-- planes -->
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


<div class="planes">
<h2>Conoce Nuestras <span class="span">Promociones</span></h2>
</div>

<!-- promociones -->
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



<div class="planes">
   <h2>Conoce Nuestros <span class="span">Empleados</span></h2>
</div>

<!-- seccion de empleados -->
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
        echo "No se encontraron promociones.";
    }
    ?>

</div>



<footer class="footmain">
    <p>Hecho Por El Equipo</p>
</footer>
    <script src="src/js/barra.js"></script>
    </div>
</body>
</html>