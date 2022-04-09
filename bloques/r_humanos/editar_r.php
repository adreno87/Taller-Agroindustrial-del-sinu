<?php

    $rid = $_GET['id'];

    $conh = "SELECT * FROM recursos_humanos WHERE id = '$rid'";
    $resulth = mysqli_query($conexion, $conh) or die("Error en la consulta");
    $humanos_d = mysqli_fetch_array($resulth);

    //editar
    if(isset($_POST["boton"])){
        $rid = $_POST["id"];
        $fecha = $_POST["fecha"];
        $informe = $_POST['informe'];
        $descripcion = $_POST["descripcion"];

        $editar_rh = "UPDATE recursos_humanos SET fecha = '$fecha', informe = '$informe', descripcion = '$descripcion' WHERE id = '$rid'";
        mysqli_query($conexion, $editar_rh) or die("no cambio informacion");
        //header("Location: ../../R_Humanos.php");
        echo "<script>window.Location = '../../R_Humanos.php' </script>";

    }

?>

<div id="formulario" >

    <form action="R_Humanos.php?id=<?php echo $humanos_d["id"];?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $humanos_d["id"];?>">
        <table>
            <tr>
                <th>Fecha</th>
                <td><input type="date" name="fecha" id="fecha" placeholder="Fecha" value="<?php echo date("Y-m-d"); ?>" class="form-control" ></td>
            </tr>
            <tr>
                <th>Informe</th>
                 <?php //echo $humanos_d[2];?> 
                <td><input type="file" name="informe" id="informe" placeholder="Informe" class="form-control"></td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td><input type="text" name="descripcion" id="descripcion" required="required" placeholder="Descripcion" class="form-control" ></td>
            </tr>
            <tr>
                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-warning" onclick="window.location ='R_Humanos.php'" >Cancelar</button>
                </th>
                <td><input type="submit" name="boton" value="Insertar" class="btn btn-success"></td>
            </tr>
        </table>
    </form>







</div>








<br>
<br>

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


<script>
    document.getElementById("fecha").value = "<?php echo $humanos_d['fecha']; ?>";
    document.getElementById("informe").value = "<?php echo $humanos_d['informe']; ?>";
    document.getElementById("descripcion").value = "<?php echo $humanos_d['descripcion']; ?>";

</script>