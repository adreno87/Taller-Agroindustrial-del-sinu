<?php
    session_start();
    require_once("conexion.php");

    
    if(isset($_POST['boton'])){

        $usuarios=$_POST['usuario'];
        $clave=$_POST['Clave'];

        $consulta="SELECT * FROM user WHERE usuario='$usuarios' AND pass = '$clave'";
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