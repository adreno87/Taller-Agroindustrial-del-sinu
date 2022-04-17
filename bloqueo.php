<?php
    session_start();
    require_once("conexion.php");
    $usuarios= $_SESSION['usuario'];

    $consulta= "SELECT * FROM user WHERE id='$usuarios'";
    $resultado= mysqli_query($conexion,$consulta) or die("no se pudo realizar la consulta");
    $user= mysqli_fetch_array($resultado);

    

    if($user['id'] !=""){
        $dato="entro";
    }else{
        header("Location: index.php");
    }



?>