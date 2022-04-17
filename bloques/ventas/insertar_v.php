<?php

require_once('../../conexion.php');


if(isset($_POST['boton'])){


$fecha = $_POST['fecha'];
$sub_total = $_POST['sub_total'];
$total = $_POST['total'];
$impuesto = $_POST['impuesto'];
$provedor = $_POST['provedor'];






$insertar_v= "INSERT INTO ventas (fecha, sub_total, total,impuesto,provedor) VALUES ('$fecha', '$sub_total', '$total','$impuesto','$provedor')";

mysqli_query($conexion, $insertar_v) or die("Error en la consulta");

header("Location: ../../Ventas.php");













}




?>