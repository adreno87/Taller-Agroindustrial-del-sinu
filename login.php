<?php

session_start();
require_once('conexion.php');


if(isset($_POST['boton'])){

    $usuario = $_POST['usuario'];
    $clave = sha1($_POST['clave']);
    $consulta = "select * from usuarios where usuario = 'usuario'AND contraseña ='$clave'";
    $resultado =mysqli_query($conexion,$consulta)or die('no se consulto el usuario');
    $user = mysqli_fetch_array($resultado);

    if($user['id']  !=""){
        $_SESSION['usuario'] = $user['id'];
        header("Location: plantilla.php");

}else{

    header("Location: index.php");


}

}else{

    header("Location: index.php");


}

?>













