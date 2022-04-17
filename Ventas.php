<!DOCTYPE html>
    <html lang="es">
    <?php require_once("partes/HEAD.php"); ?>
    <?php require_once("bloqueo.php"); ?>
    <?php require_once("conexion.php"); ?>


    <body class="hold-transition sidebar-mini layout-fixed">

    <?php require_once("partes/header.php"); ?>
    <?php require_once("partes/nav.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"> 
    <!-- <div class="breadcrumb-item active"> -->
        <br>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-md-4">
        <h1>Ventas</h1>
        <br>
 <div id= formulario>
<table width="100%"  border="3"  cellspacing="0">
<tr>
    <th>Fecha</th>
    <th>Subtotal</th>
    <th>Total</th>
    <th>Impuesto</th>
    <th>Proveedor</th>
    <th>producto</th>

    <th></th>
    <th></th>
    


</tr>

<?php 

$consulta_v = " SELECT * FROM ventas order by fecha";
$resultado_v = mysqli_query($conexion,$consulta_v) or die('no se consulto las ventas');
while($venta = mysqli_fetch_array($resultado_v)){


?>


<tr>

    <td><?php echo $venta[ 'fecha' ]; ?></td>
    <td><?php echo $venta[ 'sub_total' ]; ?></td>
    
    <td><?php echo $venta[ 'total' ]; ?></td>
    <td><?php echo $venta[ 'impuesto' ]; ?></td>
    <td><?php echo $venta[ 'provedor' ]; ?></td>

    <td>
        
    <?php

   $consulta_p = "SELECT * FROM productos WHERE id = " .  $venta[ 'productos_id' ];
    $res_producto =  mysqli_query($conexion,$consulta_p) or die('no consulto el producto');
    $productos_idd =mysqli_fetch_array($res_producto);

    
    
    ?>


</td>

    <td>  <img src="img/editar.jpg"  width="23"  title="Editar"   alt="">  </td>   
    <td>  <img src="img/eliminar.jpg"  width="24"  title="eliminar"   alt="">          </td>


</tr>

<?php }  ?>
</table>





 </div>
 <br>

</div>
        


    






    </main>


    </div>










    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
        
   
    </body>

    <script src="js/funciones.js"></script>
    <?php require_once("partes/scripts.php");?>
    

    </html>
