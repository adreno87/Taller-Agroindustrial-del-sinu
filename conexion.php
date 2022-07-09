<?php

    $servidor="localhost";
    $usuario="root";
    $clave="";
    $bd="sinu";

    $conexion=mysqli_connect($servidor,$usuario,$clave) or die("Error al conectar");
    mysqli_select_db($conexion,$bd) or die("Error al conectar la base de datos");
?>