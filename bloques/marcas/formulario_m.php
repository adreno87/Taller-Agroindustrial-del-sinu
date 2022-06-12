<button type="button" class="btn btn-info" value="insertar" name="Boton_insertar" onclick="abrirformulario('abrir')" >
Insertar marcas</button>
<br>
<br>

<div id="formulario" style="display: none;">

    <form action="bloques/marcas/insertar_m.php" method="post" enctype="multipart/form-data">
        <table>

        
        



      

            
            <tr>
                <th>Marca</th>
                <td><input type="text" name="nombre" required="required" placeholder="Marca" class="form-control" ></td>
            </tr>

                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-outline-warning" class="btn btn-warning" onclick="abrirformulario('cerrar')" >Cancelar</button>
                </th>

                <td><input type="submit" name="boton" value="Insertar" class="btn btn-outline-success"></td>
            
        </table>
    </form>
<br>






</div>