<?php

require 'includes/config/database.php'; // Se incluye el archivo de configuración de la base de datos
require 'includes/app.php'; // Se incluye el archivo principal de la aplicación
include 'includes/templates/header.php'; // Se incluye el encabezado de la página

// Establecer conexión git a la base de datos utilizando la función conectar() definida en database.php
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

<?php

//  include 'includes/templates/sedesm.php';
?>


<!-- quien somos -->

<?php
 include 'includes/templates/somos.php';
?>
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

<?php
 include 'includes/templates/planes.php';
?>




<!-- promociones -->
<?php
 include 'includes/templates/promociones.php';
?>


<!-- seccion de empleados -->

<?php
 include 'includes/templates/empleados.php';
?>

<!-- footer -->
<footer class="footmain">
    <p>Hecho Por El Equipo</p>
</footer>
    <script src="src/js/barra.js"></script>
    </div>
</body>
</html>