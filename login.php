<?php
    session_start();
    require_once("conexion.php");

    
    if(isset($_SESSION['boton'])){
        $usuario=$_POST['usario'];
        $clave= sha1($_POST['Clave']);

        $consulta="SELECT * FROM user WHERE usuario='$usuario' AND pass='$clave'";
        $resultado=mysqli_query($conexion,$consulta) or die("Error al realizar la consulta");
        $user=mysqli_fetch_array($resultado);
        if($user[0]!=""){
            $_SESSION['usuario']=$user["id"];
            header("location:plantilla.php");
        }else{
            header("location:index.php");
    }
}else{
    header("location:index.php");
}
?>