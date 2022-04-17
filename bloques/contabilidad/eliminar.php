<?php
    require_once("../../conexion.php");

    $rid = $_GET['id'];

    $eliminar_c = "DELETE FROM contabilidad WHERE id = '$rid'";
    mysqli_query($conexion, $eliminar_c) or die("Error en la consulta");

    header("Location: ../../contabilidad.php");

?>