<div id= formulario>
<table     style="width:500px"     width="100%"  border="1"  cellspacing="0" class="table table-striped">
<tr  class="table table-dark">
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

<td  ><?php echo $marcas[ 'id' ]; ?></td>
    <td    ><?php echo $marcas[ 'nombre' ]; ?></td>

    

    <td        style="width:150px;"          >  <img src="img/editar.jpg"  width="23" style="cursor:pointer;"   title="Editar"   alt=""  onclick="window.location ='marcas.php?id=<?php echo $marcas[ 'id' ]; ?>'"   >  </td>   
    <td  style="width:150px;"       >  <img src="img/eliminar.jpg"  width="30" style="cursor:pointer;"  title="eliminar"   onclick="eliminarmarca(<?php echo $marcas[ 'id' ]; ?>);"  alt="">  </td>


</tr>

<?php }  ?>


</table>





 </div>
 <br>

 </div>