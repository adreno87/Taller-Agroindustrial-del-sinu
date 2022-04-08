<div id="consulta" >
            <table class="table table-bordered bg-light" > 
                <tr>
                    <th>Fecha</th>
                    <th>Informe</th>
                    <th>Descripcion</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                $consulta_r = "SELECT * FROM recursos_humanos order by fecha desc";
                $resultado_r = mysqli_query($conexion, $consulta_r) or die("Error en la consulta");
                while ($humanos = mysqli_fetch_array($resultado_r)) {
                
                ?>
                <tr>
                    <td><?php echo $humanos['fecha']; ?></td>
                    <td><?php echo $humanos['informe']; ?></td>
                    <td><?php echo $humanos['descripcion']; ?></td>
                    <td><button title="Editar" type="button" class="btn btn-success">Editar</button></td>
                    <td><button  onclick="eliminarinforme_r(<?php echo $humanos['id']; ?>)" title="Borrar" type="button" class="btn btn-danger">Borrar</button></td>
                </tr>
                <?php
                } ?>
            </table>
        </div>