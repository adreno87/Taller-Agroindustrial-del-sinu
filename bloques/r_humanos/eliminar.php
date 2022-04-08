<?php
    require_once("../../conexion.php");

    $rid = $_GET['id'];

    $eliminar_r = "DELETE FROM recursos_humanos WHERE id = '$rid'";
    mysqli_query($conexion, $eliminar_r) or die("Error en la consulta");

    header("Location: ../../R_Humanos.php");

?>