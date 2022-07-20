<div id= formulario>
<table width="100%"  border="1"  cellspacing="0" class="table table-striped">
<tr>
    <th>Fecha</th>
    
    <th>Total</th>
    
    
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
    
    
    <td><?php echo $venta[ 'total' ]; ?></td>

    

    <td>
        
    <?php

   $consulta_p = " SELECT * FROM productos WHERE id = " .  $venta[ 'productos_id' ];
    $res_producto =  mysqli_query($conexion,$consulta_p) or die('no consulto el producto');
    $productos_id =mysqli_fetch_array($res_producto);

    echo $productos_id[ 'nombre' ];
    
    ?>


</td>

    <td>  <img src="img/editar.jpg"  width="23"  title="Editar"   alt="">  </td>   
    <td>  <img src="img/eliminar.jpg"  width="30"  title="eliminar" style="cursor:pointer;"  onclick="eliminarventas(<?php echo $venta[ 'id' ]; ?>);"   alt="">          </td>


</tr>

<?php }  ?>



</table>





 </div>
 <br>
