<button type="button" class="btn btn-info" value="insertar" name="Boton_insertar" onclick="abrirformulario('abrir')" >
Insertar productos</button>
<br>
<br>

<div id="formulario" style="display: none;">

    <form action="bloques/productos/insertar_p.php" method="post" enctype="multipart/form-data">
        <table>

        
        



       <tr>
                <th>Codigo</th>
                <td><input type="text" name="codigo" required="required" placeholder="codigo" class="form-control" ></td>
            </tr>



            <tr>
                <th>Nombre</th>
                <td><input type="text" name="nombre" required="required" placeholder="Nombre del producto" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>Valor</th>
                <td><input type="text" name="valor" required="required" placeholder="Valor del producto" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>Descripcion</th>
                <td><input type="text" name="descripcion" required="required" placeholder="Descripcion" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>Stock</th>
                <td><input type="text" name="stock" required="required" placeholder="Stock" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>Marca</th>
                <td><select name= 'marcas_id'>
                <?php 

$conpro = "SELECT * from marcas order by id";
$respro = mysqli_query($conexion,$conpro) or die('no se consulto el producto');
    while($id = mysqli_fetch_array($respro)) { 
?>

<option value="<?php echo $id[ 'id' ]; ?>" label="<?php echo $id[ 'nombre' ]; ?>">  

<?php echo $id[ 'nombre' ]; ?>

</option>    

   <?php } ?>  


                </select></td>
            </tr>

                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-outline-warning" class="btn btn-warning" onclick="abrirformulario('cerrar')" >Cancelar</button>
                </th>

                <td><input type="submit" name="boton" value="Insertar" class="btn btn-outline-success"></td>
            
        </table>
    </form>
<br>






</div>