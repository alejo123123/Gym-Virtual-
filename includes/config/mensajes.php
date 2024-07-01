<?php
$sql = $conexion->query("SELECT U_nombre, U_mensaje FROM usuarios");

while($datos = $sql->fetch_object()) {
?>
    <tr>
        <td class="nom"><?= $datos->U_nombre ?></td>
        <td><?= $datos->U_mensaje ?></td>
    </tr>
<?php } ?>
