
<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enviar"])) {
    conectar();
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    
    $sql = $conexion->query("INSERT INTO usuarios(U_nombre,U_correo,U_mensaje) VALUES('$nombre','$correo','$mensaje')");

    if ($sql==1) {
        echo'<p class=comentario>Enviado Correctamente</p>';
    }
 else {
    echo'<p class=error>Error al Enviar</p>';
}

} 
?>