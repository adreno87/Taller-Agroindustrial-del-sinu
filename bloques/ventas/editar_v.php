<?php


$cim = $_GET['id'];

$conproducto = "SELECT * FROM ventas WHERE id = '$cim'";
$resula2 = mysqli_query($conexion, $conproducto) or die("Error en la consulta");
$venta = mysqli_fetch_array($resula2);

if(isset($_POST['boton'])){

$cim = $_POST['id'];
$fecha = $_POST['fecha'];
$total = $_POST['total'];







$editar_v = "update ventas set fecha='$fecha',total='$total',valor='$valor' where id =$cim";

mysqli_query($conexion, $editar_v) or die("Error en la consulta");

// header("Location: marcas.php");
echo "<script> window.location ='productos.php' </script>";

}

?>

<div id="formulario" >

    <form action="Ventas.php?id=<?php echo $ventas['id'];?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $ventas['id'];?>"   >
        <table>

        
        



       <tr>
                <th>Codigo</th>
                <td><input type="text" name="codigo"  value="<?php echo $ventas['codigo'];?>" required="required" placeholder="codigo" class="form-control" ></td>
            </tr>



            <tr>
                <th>Nombre</th>
                <td><input type="text" name="nombre" value="<?php echo $productos['nombre'];?>" required="required" placeholder="Nombre del producto" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>Valor</th>
                <td><input type="text" name="valor" value="<?php echo $productos['valor'];?>" required="required" placeholder="Valor del producto" class="form-control" ></td>
            </tr>

            
            

            
            <tr>
                <th>Stock</th>
                <td><input type="text" name="stock" value="<?php echo $productos['stock'];?>" required="required" placeholder="Stock" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>Marca</th>
                <td><select name= 'marcas_id'>
                <?php 

$conmar = "SELECT * from marcas order by nombre";
$resmar = mysqli_query($conexion,$conmar) or die('no se consulto el producto');
    while($marcas_id = mysqli_fetch_array($resmar)) { 
?>

<option value="<?php echo $marcas_id[ 'id' ]; ?>" label="<?php echo $marcas_id[ 'nombre' ]; ?>">  

<?php echo $id[ 'nombre' ]; ?>

</option>    

   <?php } ?>  


                </select></td>
            </tr>

                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-outline-warning" class="btn btn-warning" onclick= "window.location='productos.php'" >Cancelar</button>
                </th>

                <td><input type="submit" name="boton" value="Insertar" class="btn btn-outline-success"></td>
            
        </table>
    </form>
<br>






</div>











<div id= formulario>
<table     width="100%"  border="1"  cellspacing="0" class="table table-striped">
<tr   class="table-dark ">
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Valor</th>
    
    <th>Stock</th>
    <th>Marca</th>

    <th></th>
    <th></th>
    


</tr>

<?php 

$consulta_p = " SELECT * FROM productos order by codigo";
$resultado_p = mysqli_query($conexion,$consulta_p) or die('no se consulto las ventas');
while($productos = mysqli_fetch_array($resultado_p)){


?>


<tr>

    <td ><?php echo $productos[ 'codigo' ]; ?></td>
    <td><?php echo $productos[ 'nombre' ]; ?></td>
    
    <td><?php echo $productos[ 'valor' ]; ?></td>
    
    <td><?php echo $productos[ 'stock' ]; ?></td>
    <td><?php

$consulta_m = " SELECT * FROM marcas WHERE id = " .  $productos[ 'marcas_id' ];
 $res_m =  mysqli_query($conexion,$consulta_m) or die('no consulto el producto');
 $marcas_id =mysqli_fetch_array($res_m);

 echo $marcas_id[ 'nombre' ];
 
 ?>   </td>

    

    <td>  <img src="img/editar.jpg"  width="23"  title="Editar"   alt=""     >  </td>   
    <td>  <img src="img/eliminar.jpg"  width="30" style="cursor:pointer;"  title="eliminar"   onclick="eliminarproducto(<?php echo $productos[ 'id' ]; ?>);"  alt="">  </td>


</tr>

<?php }  ?>

</table>





 </div>
 <br>

</div>