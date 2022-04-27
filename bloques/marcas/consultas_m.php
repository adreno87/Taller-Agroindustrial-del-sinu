<div id= formulario>
<table width="100%"  border="1"  cellspacing="0" class="table table-striped">
<tr>
<th>#</th>
    <th>marca</th>
    <th></th>
    <th></th>

    
    


</tr>



<?php 

$consulta_m = " SELECT * FROM marcas order by id";
$resultado_m = mysqli_query($conexion,$consulta_m) or die('no se consulto las marcas');
while($marcas = mysqli_fetch_array($resultado_m)){


?>






<tr>

<td    style= ><?php echo $marcas[ 'id' ]; ?></td>
    <td    ><?php echo $marcas[ 'nombre' ]; ?></td>

    

    <td        style="width:150px;"          >  <img src="img/editar.jpg"  width="23"  title="Editar"   alt=""   >  </td>   
    <td  style="width:150px;"       >  <img src="img/eliminar.jpg"  width="30" style="cursor:pointer;"  title="eliminar"   onclick="eliminarproducto(<?php echo $productos[ 'id' ]; ?>);"  alt="">  </td>


</tr>

<?php }  ?>


</table>





 </div>
 <br>

 </div>