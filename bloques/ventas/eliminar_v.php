<?php        


require_once('../../conexion.php');

$cim = $_GET['id'];

$eliminar_v = " delete from ventas WHERE id = $cim";
 mysqli_query($conexion,$eliminar_v) or die('no se elimino la  marcas');


header("Location: ../../Ventas.php");


?>