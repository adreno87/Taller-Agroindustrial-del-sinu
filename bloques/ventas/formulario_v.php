<button type="button" class="btn btn-info" value="insertar" name="Boton_insertar" onclick="abrirformulario('abrir')" >
Insertar venta</button>
<br>
<br>

<div id="formulario" style="display: none;">

    <form action="bloques/ventas/insertar_v.php" method="post" enctype="multipart/form-data">
        <table >
        
        
       <tr>
                <th>Fecha</th>
                <td><input type="date" name="fecha" required="required" placeholder="fecha de la venta" class="form-control" ></td>
            </tr>
            
            
            <tr>
                <th>total</th>
                <td><input type="text" name="total" required="required" placeholder="Valor del producto" class="form-control" ></td>
            </tr>




            
            



            <tr>
                <th>Cliente</th>
                <td>



                 <select name= 'id_cliente'>  
                                  
                     
                
                
                
<?php 

$concliente = "SELECT * from clientes order by nombre";
$respro = mysqli_query($conexion,$concliente) or die('no se consulto el producto');
while($id_cliente  = mysqli_fetch_array($respro)) { 
?>
      
      
      <option value="<?php echo $id_cliente [ 'id' ]; ?>" label="<?php echo $id_cliente [ 'nombre' ]; ?>">  

<?php echo $id_cliente [ 'nombre' ]; ?>

</option>    

   <?php } ?>          

                </select>




                </td>
            </tr>



























            <tr>
                <th>productos</th>
                <td>



                 <select name= 'productos_id'>  
                                  
                     
                
                
                
<?php 

$conpro = "SELECT * from productos order by nombre";
$respro = mysqli_query($conexion,$conpro) or die('no se consulto el producto');
while($productos_id = mysqli_fetch_array($respro)) { 
?>
      
      
      <option value="<?php echo $productos_id[ 'id' ]; ?>" label="<?php echo $productos_id[ 'nombre' ]; ?>">  

<?php echo $productos_id[ 'nombre' ]; ?>

</option>    

   <?php } ?>          

                </select>




                </td>
            </tr>
            













            
                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-outline-warning"  onclick="abrirformulario('cerrar')" >Cancelar</button>
                </th>
                <td><input type="submit" name="boton" value="Insertar" class="btn btn-outline-success"></td>
            
        </table>
    </form>
<br>
</div>