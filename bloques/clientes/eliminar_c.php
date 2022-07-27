<?php        


require_once('../../conexion.php');

$cim = $_GET['id'];

$eliminar_c = " delete from clientes WHERE id = $cim";
 mysqli_query($conexion,$eliminar_c) or die('no se elimino la  marcas');


header("Location: ../../Clientes.php");


?>