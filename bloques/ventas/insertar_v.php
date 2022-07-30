<?php

require_once('../../conexion.php');


if(isset($_POST['boton'])){


$fecha = $_POST['fecha'];

$total = $_POST['total'];


$productos_id = $_POST['productos_id'];





$insertar_v= "INSERT INTO ventas (fecha,  total,productos_id) VALUES ('$fecha',  '$total', $productos_id )";

mysqli_query($conexion, $insertar_v) or die("Error en la consulta");

header("Location: ../../Ventas.php");













}




?>