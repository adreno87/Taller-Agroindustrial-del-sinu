<?php        


require_once('../../conexion.php');

$cim = $_GET['id'];

$eliminar_m = " delete from marcas WHERE id = $cim";
 mysqli_query($conexion,$eliminar_m) or die('no se elimino la  marcas');


header("Location: ../../marcas.php");


?>