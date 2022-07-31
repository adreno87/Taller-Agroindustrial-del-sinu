<?php
    require_once("../../conexion.php");

    $contid = $_GET['id'];

    $eliminar_co = "DELETE FROM contabilidad WHERE id = '$contid'";
    mysqli_query($conexion, $eliminar_co) or die("Error, no fue eliminado");

    header("Location: ../../contabilidad.php");

?>