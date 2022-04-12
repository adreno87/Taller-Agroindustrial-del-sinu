<?php 
session_start();

 require_once("conexion.php");


$usuario =$_SESSION['usuario'];

$consulta = "SELECT * FROM usuarios WHERE id = '$usuario'";
$resultado =mysqli_query($conexion,$consulta)or die('no se consulto el usuario');
$user = mysqli_fetch_array($resultado);


if($user['id']  !=""){
    $dato="entro";

}else{

header("Location: index.php");


}






?>