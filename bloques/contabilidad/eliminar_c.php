<?php
    require_once("../../conexion.php");

    $cont = $_GET['id'];

    $eliminar_c = "DELETE FROM contabilidad WHERE id = '$cont'";
    mysqli_query($conexion, $eliminar_c) or die("Error, no fue eliminado");

    header("Location: ../../contabilidad.php");

?>