<?php


$cim = $_GET['id'];

$concliente = "SELECT * FROM clientes WHERE id = '$cim'";
$resula4 = mysqli_query($conexion, $concliente) or die("Error en la consulta");
$clientes = mysqli_fetch_array($resula4);

if(isset($_POST['boton'])){

$cim = $_POST['id'];

$nombre = $_POST['nombre'];
$documento = $_POST['documento'];

$email = $_POST['email'];
$telefono = $_POST['telefono'];






$editar_c = "update clientes set nombre='$nombre',documento='$documento',email='$email',telefono='$telefono' where id =$cim";

mysqli_query($conexion, $editar_c) or die("Error en la consulta");

// header("Location: marcas.php");
echo "<script> window.location ='Clientes.php' </script>";

}

?>

<div id="formulario" >

    <form action="Clientes.php?id=<?php echo $clientes['id'];?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $clientes['id'];?>"   >
        <table>

        
        



       <tr>
                <th>Nombre</th>
                <td><input type="text" name="nombre"  value="<?php echo $clientes['nombre'];?>" required="required" placeholder="nombre" class="form-control" ></td>
            </tr>



            <tr>
                <th>Documento</th>
                <td><input type="text" name="documento" value="<?php echo $clientes['documento'];?>" required="required" placeholder="documento" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>email</th>
                <td><input type="text" name="email" value="<?php echo $clientes['email'];?>" required="required" placeholder="email" class="form-control" ></td>
            </tr>

            
            

            
            <tr>
                <th>Telefono</th>
                <td><input type="text" name="telefono" value="<?php echo $clientes['telefono'];?>" required="required" placeholder="telefono" class="form-control" ></td>
            </tr>

            
      

                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-outline-warning" class="btn btn-warning" onclick= "window.location='Clientes.php'" >Cancelar</button>
                </th>

                <td><input type="submit" name="boton" value="Insertar" class="btn btn-outline-success"></td>
            
        </table>
    </form>
<br>






</div>











<div id= formulario>
<table     width="100%"  border="1"  cellspacing="0" class="table table-striped">
<tr   class="table-dark ">

    <th>Nombre</th>
    <th>Documento</th>
    
    <th>Email</th>
    <th>Telefono</th>

    <th></th>
    <th></th>
    


</tr>

<?php 

$consulta_p = " SELECT * FROM clientes order by nombre";
$resultado_p = mysqli_query($conexion,$consulta_p) or die('no se consulto las ventas');
while($productos = mysqli_fetch_array($resultado_p)){


?>


<tr>

    <td ><?php echo $clientes[ 'nombre' ]; ?></td>
    <td><?php echo $clientes[ 'documento' ]; ?></td>
    
    <td><?php echo $clientes[ 'email' ]; ?></td>
    
    <td><?php echo $clientes[ 'telefono' ]; ?></td>
    

    

    <td>  <img src="img/editar.jpg"  width="23"  title="Editar"   alt=""     >  </td>   
    <td>  <img src="img/eliminar.jpg"  width="30" style="cursor:pointer;"  title="eliminar"   onclick="eliminarcliente(<?php echo $clientes[ 'id' ]; ?>);"  alt="">  </td>


</tr>

<?php }  ?>

</table>





 </div>
 <br>

</div>