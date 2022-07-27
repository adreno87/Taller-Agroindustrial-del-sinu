<?php

require_once('../../conexion.php');


if(isset($_POST['boton'])){


$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$valor = $_POST['valor'];

$stock = $_POST['stock'];
$marcas_id = $_POST['marcas_id'];





$insertar_m = "INSERT INTO productos (codigo, nombre, valor,stock,marcas_id) VALUES ('$codigo', '$nombre', '$valor','$stock',$marcas_id)";

mysqli_query($conexion, $insertar_m) or die("Error en la consulta");

header("Location: ../../productos.php");













}




?>