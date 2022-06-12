<?php
    require_once("../../conexion.php");

    $rid = $_GET['id'];

    $eliminar_tc = "DELETE FROM tecnologia WHERE id = '$rid'";
    mysqli_query($conexion, $eliminar_tc) or die("Error en la consulta");

    header("Location: ../../tecnologia.php");

?>