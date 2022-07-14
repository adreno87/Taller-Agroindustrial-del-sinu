<?php
    require_once("../../conexion.php");

    $tid = $_GET['id'];

    $eliminar_tc = "DELETE FROM tecnologia WHERE id = $tid";
    mysqli_query($conexion, $eliminar_tc) or die("No se borro ningun dato");

    header("Location: ../../P_Tecnologia.php");

?>