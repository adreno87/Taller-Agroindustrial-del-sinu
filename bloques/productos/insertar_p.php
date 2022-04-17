<?php

require_once('../../conexion.php');


if(isset($_POST['boton'])){


$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$valor = $_POST['valor'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$marca = $_POST['marca'];





$insertar_ = "INSERT INTO productos (codigo, nombre, valor,descripcion,stock,marca) VALUES ('$codigo', '$nombre', '$valor','$descripcion','$stock','$marca')";

mysqli_query($conexion, $insertar_) or die("Error en la consulta");

header("Location: ../../productos.php");













}




?>