<div id= formulario>
<table     style="width:500px"     width="100%"  border="1"  cellspacing="0" class="table table-striped">
<tr  class="table table-dark">
<th>#</th> 
   <th>nombre</th>
    <th>documento</th>
    <th>email</th>
    <th>Telefono</th>
    <th></th>
    <th></th>
    
    
    


</tr>



<?php 

$consulta_c = " SELECT * FROM clientes order by id";
$resultado_c = mysqli_query($conexion,$consulta_c) or die('no se consulto las marcas');
while($clientes = mysqli_fetch_array($resultado_c)){


?>






<tr>

<td  ><?php echo $clientes[ 'id' ]; ?></td>
    <td    ><?php echo $clientes[ 'nombre' ]; ?></td>
    <td    ><?php echo $clientes[ 'documento' ]; ?></td>
    <td    ><?php echo $clientes[ 'email' ]; ?></td>
    <td    ><?php echo $clientes[ 'telefono' ]; ?></td>
    

    

    <td        style="width:150px;"          >  <img src="img/editar.jpg"  width="23" style="cursor:pointer;"   title="Editar"   alt=""  onclick="window.location ='Clientes.php?id=<?php echo $clientes[ 'id' ]; ?>'"   >  </td>   
    <td  style="width:150px;"       >  <img src="img/eliminar.jpg"  width="30" style="cursor:pointer;"  title="eliminar"   onclick="eliminarcliente(<?php echo $clientes[ 'id' ]; ?>);"  alt="">  </td>


</tr>

<?php }  ?>


</table>





 </div>
 <br>

 </div>