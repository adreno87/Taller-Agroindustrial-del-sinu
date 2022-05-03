<?php        


require_once('../../conexion.php');

$cim = $_GET['id'];

$eliminar_m = " DELETE * FROM marcas WHERE id = $cim";
 mysqli_query($conexion,$eliminar_m) or die('no se consulto las marcas');


header("Location: ../../marcas.php");


?>