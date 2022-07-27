<button type="button" class="btn btn-info" value="insertar" name="Boton_insertar" onclick="abrirformulario('abrir')" >
Insertar cliente</button>
<br>
<br>

<div id="formulario" style="display: none;">

    <form action="bloques/clientes/insertar_c.php" method="post" enctype="multipart/form-data">
        <table>

        
        



      

            
            <tr>
                <th>Nombre</th>
                <td><input type="text" name="nombre" required="required" placeholder="Cliente" class="form-control" ></td>
            </tr>

            <tr>
                <th>Documento</th>
                <td><input type="text" name="documento" required="required" placeholder="documento" class="form-control" ></td>
            </tr>



            <tr>
                <th>Email</th>
                <td><input type="text" name="email" required="required" placeholder="correo" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>Telefono</th>
                <td><input type="text" name="telefono" required="required" placeholder="telefono" class="form-control" ></td>
            </tr>

                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-outline-warning" class="btn btn-warning" onclick="abrirformulario('cerrar')" >Cancelar</button>
                </th>

                <td><input type="submit" name="boton" value="Insertar" class="btn btn-outline-success"></td>
            
        </table>
    </form>
<br>






</div>