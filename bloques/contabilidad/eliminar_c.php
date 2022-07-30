<?php
    require_once("../../conexion.php");

    $contid = $_GET['id'];

    $eliminar_c = "DELETE FROM contabilidad WHERE id = '$contid'";
    mysqli_query($conexion, $eliminar_c) or die("Error, no fue eliminado");

    header("Location: ../../contabilidad.php");

?>