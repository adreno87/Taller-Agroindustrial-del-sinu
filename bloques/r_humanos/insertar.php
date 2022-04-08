<?php 
    require_once("../../conexion.php");

    if(isset($_POST['boton'])){
        $fecha = $_POST['fecha'];
        $informe = $_POST['informe'];
        $descripcion = $_POST['descripcion'];

        $insertar_r = "INSERT INTO recursos_humanos (fecha, informe, descripcion) VALUES ('$fecha', '$informe', '$descripcion')";

        mysqli_query($conexion, $insertar_r) or die("Error en la consulta");

        header("Location: ../../R_Humanos.php");
    }


?>