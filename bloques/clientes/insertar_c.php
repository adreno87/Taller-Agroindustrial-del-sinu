<?php

require_once('../../conexion.php');


if(isset($_POST['boton'])){


$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];






$insertar_c = "INSERT INTO clientes (nombre, documento, email,telefono) VALUES ('$nombre', '$documento', '$email','$telefono')";

mysqli_query($conexion, $insertar_c) or die("Error en la consulta");

header("Location: ../../Clientes.php");













}




?>