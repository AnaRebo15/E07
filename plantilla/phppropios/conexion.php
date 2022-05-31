<?php
    $conexion=mysqli_connect('localhost', 'root', '', 'sistete');
    if(!$conexion){
        die("Error al conectarse a la base de datos: ".mysqli_connect_error());
    }
?>