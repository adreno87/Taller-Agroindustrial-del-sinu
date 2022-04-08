

<?php 
    require_once("../../conexion.php");

    if(isset($_POST['boton'])){
        //rutas de los archivos
        $destinoinfo = "../../../informes/RH";

        //capturar datos del formulario
        $fecha = $_POST['fecha'];
        $informe = $_POST['informe'];
        $descripcion = $_POST['descripcion'];

        //subir archivo
        $info = $_FILES['informe'];
        $nombre_info = $info['name'];
        $tamano_info = $info['size'];
        list($ninfo, $ext)= explode(".", $nombre_info);

        $insertar_r = "INSERT INTO recursos_humanos (fecha, informe, descripcion) VALUES ('$fecha', '$informe', '$descripcion')";

        mysqli_query($conexion, $insertar_r) or die("Error en la consulta");

        header("Location: ../../R_Humanos.php");
    }


?>