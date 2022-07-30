<?php

require_once('../../conexion.php');


if(isset($_POST['boton'])){


$fecha = $_POST['fecha'];
$sub_total = $_POST['sub_total'];
$total = $_POST['total'];
$impuesto = $_POST['impuesto'];
$provedor = $_POST['provedor'];
$productos_id = $_POST['productos_id'];





$insertar_v= "INSERT INTO ventas (fecha, sub_total, total,impuesto,provedor,productos_id) VALUES ('$fecha', '$sub_total', '$total','$impuesto','$provedor', $productos_id )";

mysqli_query($conexion, $insertar_v) or die("Error en la consulta");

header("Location: ../../Ventas.php");













}




?>