<?php
include 'includes/templates/header.php';
require 'includes/app.php';
include 'includes/config/conectar.php';
require 'includes/config/database.php';
?>

<main class="margen">

<div class="tabla2">
        <table class="table">
       <tbody>
            <thead >
                <tr class="tr">
                    <th>Nombre</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
        

            <?php 
            include 'includes/config/conectar.php';
            include 'includes/config/mensajes.php';
            ?>
    </tbody>
        </table>
        </div>
</main>