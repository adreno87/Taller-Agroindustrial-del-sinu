<button type="button" class="btn btn-info" value="insertar" name="Boton_insertar" onclick="abrirformulario('abrir')" >
Insertar venta</button>
<br>
<br>

<div id="formulario" style="display: none;">

    <form action="bloques/ventas/insertar_v.php" method="post" enctype="multipart/form-data">
        <table>

        
        



       <tr>
                <th>Fecha</th>
                <td><input type="date" name="fecha" required="required" placeholder="fecha de la venta" class="form-control" ></td>
            </tr>



            <tr>
                <th>sub_total</th>
                <td><input type="text" name="sub_total" required="required" placeholder="Nombre del producto" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>total</th>
                <td><input type="text" name="total" required="required" placeholder="Valor del producto" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>impuesto</th>
                <td><input type="text" name="impuesto" required="required" placeholder="Descripcion" class="form-control" ></td>
            </tr>

            
            <tr>
                <th>proveedor</th>
                <td><input type="text" name="provedor" required="required" placeholder="Stock" class="form-control" ></td>
            </tr>

            
            

                <th>
                    <button name="cancelar" value="insertar" type="button" style="background-color:darkorange" class="btn btn-warning" onclick="abrirformulario('cerrar')" >Cancelar</button>
                </th>

                <td><input type="submit" name="boton" value="Insertar" class="btn btn-success"></td>
            
        </table>
    </form>
<br>






</div>