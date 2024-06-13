<?php 
  include './includes/templates/header.php';
?>
<body>

    <!-- Este es el contenido principal, envuelto en una caja -->

<main class="caja2">

    <!-- Este div contiene los elementos de entrada y el botón para convertir -->

    <div class="contenedor">

        <!-- Este es el campo de entrada para las libras -->

        <input id="libras" class="campos libras" type="number" placeholder="libras" required>

        <!-- Este es el botón que activa la conversión -->

        <button id='convertir' class="boton campos">Convertir</button>

        <!-- Este es el campo de entrada para los kilos -->

        <input id='kilos' class="campos kilos" type="number" placeholder="kilos" required>
    </div>

<!-- footer -->

<footer class="footer2">
 <p>Powered By AlejoMasterGG</p>
</footer>


    <script src="./src/js/calculadoralb.js"></script>
</body>
</html>