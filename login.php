<?php
session_start();
 require_once("conexion.php");

if(isset($_POST['boton'])){

    $usuario = $_POST['usuario'];
    $clave = sha1($_POST ['Clave']);

    $consulta ="SELECT * FROM usuarios WHERE usuario = '$usuario'AND pass = '$clave' ";
    $resultado = mysqli_query($conexion,$consulta) or die('no se consulto el usuario') ;
    $user = mysqli_fetch_array($resultado);

    //print_r($user);

    if($user['id']  !=""){
        $_SESSION["usuario"] = $user["id"];
            header("Location:plantilla.php");

}else{

        header("Location: index.php");


}


}else{

        header("Location: index.php");



}




?>