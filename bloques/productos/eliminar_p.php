<?php
    require_once('../../conexion.php');

    $cid = $_GET['id'];

    $eliminar_p = "DELETE FROM productos WHERE id = $cid";
    mysqli_query($conexion, $eliminar_p) or die('Error en la consulta');

    header("Location: ../../productos");

?>