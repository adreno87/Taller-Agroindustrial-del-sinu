<?php


    $cim = $_GET['id'];

    $conmarca = "SELECT * FROM marcas WHERE id = '$cim'";
    $resula = mysqli_query($conexion, $conmarca) or die("Error en la consulta");
    $marca = mysqli_fetch_array($resula);

   if(isset($_POST['boton'])){

    $cim = $_POST['id'];
    $marcas = $_POST['nombre'];





    $editar_m = "update marcas set nombre= '$marcas'where id =$cim";
    
    mysqli_query($conexion, $editar_m) or die("Error en la consulta");
    
   // header("Location: marcas.php");
echo "<script> window.location ='marcas.php' </script>";

   }

?>







<div id="formulario" >

    <form action="marcas.php?id=<?php echo $marca['id'];?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $marca['id'];?>"   >
        <table>

        
        



      

            
            <tr>
                <th>Marca</th>
                <td><input type="text" name="nombre" value="<?php echo $marca['nombre'];?>" required="required" placeholder="Marca" class="form-control" ></td>
            </tr>

                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-outline-warning" class="btn btn-warning" onclick="window.location='marcas.php'" >Cancelar</button>
                </th>

                <td><input type="submit" name="boton" value="Insertar" class="btn btn-outline-success"></td>
            
        </table>
    </form>
<br>






</div>



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

    

    <td        style="width:150px;"          >  <img src="img/editar.jpg"  width="23"   title="Editar"   alt=""   >  </td>   
    <td  style="width:150px;"       >  <img src="img/eliminar.jpg"  width="30" style="cursor:pointer;"  title="eliminar"   onclick="eliminarmarca(<?php echo $marca[ 'id' ]; ?>);"  alt="">  </td>


</tr>

<?php }  ?>

</table>

 </div>
 <br>

 </div>



 




 