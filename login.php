<?php
    session_start();
    require_once("conexion.php");

    
    if(isset($_POST['boton'])){

        $usuarios=$_POST['usuario'];
        $clave= sha1 ($_POST['Clave']);

        $consulta="SELECT * FROM user WHERE usuario='$usuarios' AND contraseña = '$clave'";
        $resultado=mysqli_query($conexion,$consulta) or die("Error al realizar la consulta");
        $user=mysqli_fetch_array($resultado);


        if($user["id"]!=""){
        $_SESSION['usuario']=$user["id"];
            header("location:plantilla.php");
        }else{
            header("location:index.php");
    }
}else{
    header("location:index.php");
}
?>