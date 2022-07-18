
<?php 
    require_once("../../conexion.php");

    if(isset($_POST['boton'])){
        //rutas de los archivos
       //$destinoinfo = "../../informes/TEC";

        //capturar datos del formulario
        $Id = $_POST['id'];
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
        $Accion = $_POST['equipo'];
        $Dependencia = $_POST['departamento'];
        
       /*
        //capturar archivo
        $info = $_FILES['informe'];
        // echo "archivo";
        // echo $info['informe'];
       $nombre_info = $info['name'];
       $tamano_info = $info['size'];
       list($ninfo,$ext) = explode('.', $nombre_info);
        $ninfo =  $nombre_info;

        //subir archivo
       if($ext=="pdf" || $ext=="xlsx" || $ext=="docx"){
           if($tamano_info <= 200000000){
               move_uploaded_file($info['tmp_name'], $destinoinfo.'/'.$ninfo);
           }else{
               echo "<script> alert( 'tamaño excedido') </script>";
            }
        }else{
           echo "<script> alert( 'extensión no permitida') </script>";
     }  
*/
     $insertar_tc = "INSERT INTO tecnologia (id, fecha, descripcion, equipo, departamento) VALUES ('$id','$fecha', '$descripcion', '$Accion', '$Dependencia')";

       mysqli_query($conexion, $insertar_tc) or die("Error en la consulta");

       header("Location: ../../P_Tecnologia.php");
    }
    
    



?>
