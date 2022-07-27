
<?php 
    require_once("../../conexion.php");

    if(isset($_POST['boton'])) {
        //rutas donde se guardan los archivos
       $destinoinfo = ("../../C:/XAMPP/htdocs/Taller-Agroindustrial-del-sinu/informes/CONT");

        //capturar datos del formulario
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
       
        //capturar archivo
        $info = $_FILES['informe'];  
        $nombre_info = $info['name'];
        $tamano_info = $info['size'];
        list($ninfo, $extinfo) = explode('.', $nombre_info);
        echo $ninfo = $descripcion. ".".$extinfo;

        //subir archivo
       if($ext=="pdf" || $ext=="xlsx" || $ext=="docx"){

           if($tamano_info <= 5000000000) {
               move_uploaded_file($info['tmp_name'], $destinoinfo. "/".$ninfo);
           }else{
               echo "<script> alert( 'tamaño excedido') </script>";
            }

        }else {
           echo "<script> alert( 'extensión no permitida') </script>";
     }
    // guardar la informacion en la base de datos
     $insertar_c = "INSERT INTO contabilidad (fecha, informe, descripcion) VALUES ('$fecha', '$destinoinfo', '$descripcion')";

       mysqli_query($conexion, $insertar_c) or die("Error en la consulta");

       header("Location: ../../contabilidad.php");
    }
    
    



?>