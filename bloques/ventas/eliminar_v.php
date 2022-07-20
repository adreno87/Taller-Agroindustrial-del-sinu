<?php
    require_once('../../conexion.php');

    $ven = $_GET['id'];

    $eliminar_v = "delete from ventas WHERE id = $ven ";
    mysqli_query($conexion, $eliminar_v) or die('Error en la consulta');

    header("Location: ../../Ventas.php");

?>