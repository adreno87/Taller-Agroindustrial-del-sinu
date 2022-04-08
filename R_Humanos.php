    <!DOCTYPE html>
    <html lang="es">
    <?php require_once("partes/HEAD.php"); ?>
    <?php require_once("bloqueo.php"); ?>
    <?php require_once("conexion.php"); ?>


    <body class="hold-transition sidebar-mini layout-fixed">

    <?php require_once("partes/header.php"); ?>
    <?php require_once("partes/nav.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"> 
    <!-- <div class="breadcrumb-item active"> -->
        <br>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-md-4">
        <h1>Recursos Humanos</h1>
        <br>
        <div id="formulario">
        </div>
        <br>
        <div id="consulta" >
            <table class="table table-bordered bg-light" > 
                <tr>
                    <th>Fecha</th>
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
                    <td><?php echo $humanos['descripcion']; ?></td>
                    <td><button title="Editar" type="button" class="btn btn-success">Editar</button></td>
                    <td><button title="Borrar" type="button" class="btn btn-danger">Borrar</button></td>
                </tr>
                <?php
                } ?>
            </table>
        </div>






    </main>


    </div>










    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
        
    <?php require_once("partes/scripts.php"); ?>

    </body>
    </html>