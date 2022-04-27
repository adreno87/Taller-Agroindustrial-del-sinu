<?php

require_once('../../conexion.php');


if(isset($_POST['boton'])){



$marcas = $_POST['nombre'];





$insertar_m = "INSERT INTO marcas (nombre) VALUES ('$marcas')";

mysqli_query($conexion, $insertar_m) or die("Error en la consulta");

header("Location: ../../marcas.php");


}




?>