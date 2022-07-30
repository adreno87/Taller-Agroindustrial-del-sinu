
<button type="button" class="btn btn-info" value="insertar" name="Boton_insertar" onclick="abrirformulario('abrir')" >
Insertar Informe</button>
<br><br>

<div id="formulario" style="display: none;">

    <form action="bloques/tecnologia/insertar_tc.php" method="post">
        <table>
            <tr>
                <th>Id</th>
                <td><input type="text" name="id" required="required" placeholder="id" class="form-control" ></td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td><input type="date" name="fecha" required="required" placeholder="Fecha" value="<?php echo date("Y-m-d"); ?>" class="form-control" ></td>
            </tr>
            
            <tr>
                <th>Descripcion</th>
                <td><input type="text" name="descripcion" required="required" placeholder="Descripcion" class="form-control" ></td>
            </tr>
            <tr>
                <th>Accion</th>
                <td><input type="text" name="equipo" required="required" placeholder="name" class="form-control" ></td>
            </tr>
            <tr>
                <th>Dependencia</th>
                <td><input type="text" name="departamento" required="required" placeholder="departamento" class="form-control" ></td>
            </tr>
            <tr>
                <th>Informe</th>
                <td><input type="file" name="Informe" require="required" placeholder="Informe" class="form-control"></td>
            </tr>
            <tr>
                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-warning" onclick="abrirformulario('cerrar')" >Cancelar</button>
                </th>
                <td><input type="submit" name="boton" value="Insertar" class="btn btn-success"></td>
            </tr>
        </table>
    </form>







</div>

