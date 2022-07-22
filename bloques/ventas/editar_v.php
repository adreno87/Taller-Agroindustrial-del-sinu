<?php


    $cim = $_GET['id'];

    $conventa = "SELECT * FROM venta WHERE id = '$cim'";
    $resula3 = mysqli_query($conexion, $conventa) or die("Error en la consulta");
    $ventas = mysqli_fetch_array($resula3);

   if(isset($_POST['boton'])){

    $cim = $_POST['id'];
    $marcas = $_POST['nombre'];





    $editar_v = "update ventas set nombre= '$ventas'where id =$cim";
    
    mysqli_query($conexion, $editar_v) or die("Error en la consulta");
    
   // header("Location: marcas.php");
echo "<script> window.location ='Ventas.php' </script>";

   }

?>