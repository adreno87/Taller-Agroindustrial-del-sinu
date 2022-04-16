<?php

$servidor = "localhost";
$usuario = "root";
$clave= "";
$bd = "bd_taller_agroindustrial_sinu";


$conexion = mysqli_connect($servidor,$usuario,$clave) or die('nose conecto a mysql');
mysqli_select_db($conexion, $bd) or die('no se conecto a la base de datos bd_proyecto_sinu');


?>