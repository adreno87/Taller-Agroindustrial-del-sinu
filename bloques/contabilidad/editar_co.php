<?php

    $contid = $_GET['id'];

    //consulta al cliente
    $consulta_co = "SELECT * FROM contabilidad WHERE id = $contid";
    $resultado_co = mysqli_query($conexion, $consulta_co) or die("Error en la consulta");
    $contabilidad = mysqli_fetch_array($resultado_co); 

    //editar
    if(isset($_POST["boton"])){
        $contid = $_POST["id"];
        $fecha = $_POST["fecha"];
        //$informe = $_POST['informe'];
        $descripcion = $_POST["descripcion"];

        $destinoinfo = "../../informes/CONT";

        //capturar datos del formulario
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
       
        //capturar archivo
        $info = $_FILES['informe'];
        // echo "archivo";
        // echo $info['informe'];
       $nombre_info = $info['name'];
       $tamano_info = $info['size'];
       list($ninfo,$extinfo) = explode('.', $nombre_info);
        $ninfo =  $nombre_info;

        //subir archivo
       if($ext=="pdf" || $ext=="xlsx" || $ext=="docx"){
           if($tamano_info <= 5000000000) {
               move_uploaded_file($info['tmp_name'], $destinoinfo."/".$ninfo);
           }else{
               echo "<script> alert( 'tamaño excedido') </script>";
            }

        }else{
           echo "<script> alert( 'extensión no permitida') </script>";
     }
        //editar la informacion
        $editar_co = "UPDATE contabilidad SET fecha = '$fecha', informe = '$destinoinfo', descripcion = '$descripcion' WHERE id = '$contid'";
        mysqli_query($conexion, $editar_co) or die("no cambio la informacion");
        //header("Location: ../../contabilidad.php");
        echo "<script>window.Location = '../../contabilidad.php' </script>";

    }

?>

<div id="formulario" >

    <form action="contabilidad.php?id=<?php echo $contabilidad["id"];?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $contabilidad["id"];?>">
        <table>
            <tr>
                <th>Fecha</th>
                <td><input type="date" name="fecha" id="fecha" placeholder="Fecha" value="<?php echo date("Y-m-d"); ?>" class="form-control" ></td>
            </tr>
            <tr>
                <th>Informe</th>
                <td> <?php echo $contabilidad["informe"];?><input type="file" name="informe" id="informe" placeholder="Informe" class="form-control"></td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td><input type="text" name="descripcion" id="descripcion" required="required" placeholder="Descripcion" class="form-control" value=" <?php echo $contabilidad["descripcion"];?>"></td>
            </tr>
            <tr>
                <th>
                    <button name="cancelar" value="Insertar" type="button" class="btn btn-warning" onclick="window.location ='contabilidad.php'" >Cancelar</button>
                </th>
                <td><input type="submit" name="boton" value="Insertar" class="btn btn-success"></td>
            </tr>
        </table>
    </form>







</div>








<br>
<br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-body -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Fecha</th>
                    <th>Informe</th>
                    <th>Descripcion</th>
                    <th>Accion</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $consulta_co = "SELECT * FROM contabilidad order by fecha desc";
                    $resultado_co = mysqli_query($conexion, $consulta_co) or die("Error en la consulta");
                    while ($contabilidad = mysqli_fetch_array($resultado_co)) {

?>
                    <tr>
                      <td><?php echo $contabilidad['fecha']; ?></td>
                      <td><?php echo $contabilidad['informe']; ?></td>
                      <td><?php echo $contabilidad['descripcion']; ?></td>
                      <td><button onclick="window.location = 'contabilidad.php?id=<?php echo $contabilidad['id']; ?>'" title="Editar" type="button" class="btn btn-success">
                      <i class="fas fa-pencil-alt">
                              </i>Editar</button></td>
                      <td><button  onclick="eliminarinforme_co(<?php echo $contabilidad['id']; ?>)" title="Borrar" type="button" class="btn btn-danger"> <i class="fas fa-trash">
                              </i>Borrar</button></td>
                    </tr>
                    <?php
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    



<script>
    document.getElementById("fecha").value = "<?php echo $contabilidad['fecha']; ?>";
    document.getElementById("informe").value = "<?php echo $contabilidad['informe']; ?>";
    document.getElementById("descripcion").value = "<?php echo $contabilidad ['descripcion']; ?>";
</script>

