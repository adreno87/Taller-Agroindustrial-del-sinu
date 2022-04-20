<?php
    require_once('../../conexion.php');

    $pid = $_GET['id'];

    $eliminar_p = "delete from productos WHERE id = 'pid ";
    mysqli_query($conexion, $eliminar_p) or die('Error en la consulta');

    header("Location: ../../productos");

?>