<div id= formulario>
<table width="100%"  border="1"  cellspacing="0" class="table table-striped">
<tr>
    <th>codigo</th>
    <th>nombre</th>
    <th>valor</th>
    <th>descripcion</th>
    <th>stock</th>
    <th>marca</th>

    <th></th>
    <th></th>
    


</tr>

<?php 

$consulta_p = " SELECT * FROM productos order by codigo";
$resultado_p = mysqli_query($conexion,$consulta_p) or die('no se consulto las ventas');
while($productos = mysqli_fetch_array($resultado_p)){


?>


<tr>

    <td><?php echo $productos[ 'codigo' ]; ?></td>
    <td><?php echo $productos[ 'nombre' ]; ?></td>
    
    <td><?php echo $productos[ 'valor' ]; ?></td>
    <td><?php echo $productos[ 'descripcion' ]; ?></td>
    <td><?php echo $productos[ 'stock' ]; ?></td>
    <td><?php echo $productos[ 'marca' ]; ?></td>

    

    <td>  <img src="img/editar.jpg"  width="23"  title="Editar"   alt="">  </td>   
    <td>  <img src="img/eliminar.jpg"  width="30" style="cursor:pointer;"  title="eliminar"   onclick="eliminarproducto(<?php echo $productos[ 'id' ]; ?>);"  alt="">  </td>


</tr>

<?php }  ?>
</table>





 </div>
 <br>

</div>