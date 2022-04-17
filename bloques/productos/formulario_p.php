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
                <td><input type="text" name="marca" required="required" placeholder="Marca" class="form-control" ></td>
            </tr>

                <th>
                    <button name="cancelar" value="insertar" type="button" style="background-color:darkorange" class="btn btn-warning" onclick="abrirformulario('cerrar')" >Cancelar</button>
                </th>

                <td><input type="submit" name="boton" value="Insertar" class="btn btn-success"></td>
            
        </table>
    </form>
<br>






</div>