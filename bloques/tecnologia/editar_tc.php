<?php

    $rid = $_GET['id'];

    $conh = "SELECT * FROM tecnologia WHERE id = '$rid'";
    $resulth = mysqli_query($conexion, $conh) or die("Error en la consulta");
    $tecnologia_tc = mysqli_fetch_array($resulth);

    //editar
    if(isset($_POST["boton"])){
        $rid = $_POST["id"];
        $fecha = $_POST["fecha"];
        //$informe = $_POST['informe'];
        $descripcion = $_POST["descripcion"];

        $destinoinfo = "../../informes/TEC";

        //capturar datos del formulario
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
       
        //capturar archivo
        $info = $_FILES['informe'];
        // echo "archivo";
        // echo $info['informe'];
       $nombre_info = $info['name'];
       $tamano_info = $info['size'];
       list($ninfo,$ext) = explode('.', $nombre_info);
        $ninfo =  $nombre_info;

        //subir archivo
       if($ext=="pdf" || $ext=="xlsx" || $ext=="docx"){
           if($tamano_info <= 200000000){
               move_uploaded_file($info['tmp_name'], $destinoinfo.'/'.$ninfo);
           }else{
               echo "<script> alert( 'tamaño excedido') </script>";
            }
        }else{
           echo "<script> alert( 'extensión no permitida') </script>";
     }




        $editar_tc = "UPDATE tecnologia SET fecha = '$fecha', informe = '$ninfo', descripcion = '$descripcion' WHERE id = '$rid'";
        mysqli_query($conexion, $editar_tc) or die("no cambio informacion");
        //header("Location: ../../tecnologia.php");
        echo "<script>window.Location = '../../tecnologia.php' </script>";

    }

?>

<div id="formulario" >

    <form action="tecnologia.php?id=<?php echo $tecnologia_tc["id"];?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $tecnologia_tc["id"];?>">
        <table>
            <tr>
                <th>Fecha</th>
                <td><input type="date" name="fecha" id="fecha" placeholder="Fecha" value="<?php echo date("Y-m-d"); ?>" class="form-control" ></td>
            </tr>
            <tr>
                <th>Informe</th>
                
                <td> <?php echo $tecnologia_tc["informe"];?><input type="file" name="informe" id="informe" placeholder="Informe" class="form-control"></td>
            </tr>
            <tr>
                <th>Descripcion</th>
               
                <td><input type="text" name="descripcion" id="descripcion" required="required" placeholder="Descripcion" class="form-control" value=" <?php echo $tecnologia_tc["descripcion"];?>"></td>
            </tr>
            <tr>
                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-warning" onclick="window.location ='P_Tecnologia.php'" >Cancelar</button>
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
                    $consulta_tc = "SELECT * FROM tecnologia order by fecha desc";
                    $resultado_tc = mysqli_query($conexion, $consulta_tc) or die("Error en la consulta");
                    while ($tecno = mysqli_fetch_array($resultado_tc)) {
                    ?>
                    <tr>
                      <td><?php echo $tecno['fecha']; ?></td>
                      <td><?php echo $tecno['informe']; ?></td>
                      <td><?php echo $tecno['descripcion']; ?></td>
                      <td><button onclick="window.location = 'P_Tecnologia.php?id=<?php echo $tecno['id']; ?>'" title="Editar" type="button" class="btn btn-success">
                      <i class="fas fa-pencil-alt">
                              </i>
                      Editar</button></td>
                      <td><button  onclick="eliminarinforme_tc(<?php echo $tecno['id']; ?>)" title="Borrar" type="button" class="btn btn-danger"> <i class="fas fa-trash">
                              </i>Borrar</button></td>
                    </tr>
                    <?php
                    } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Fecha</th>
                    <th>Informe</th>
                    <th>Descripcion</th>
                    <th>Accion</th>
                    
                  </tr>
                  </tfoot>
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
    document.getElementById("fecha").value = "<?php echo $tecnologia_tc['fecha']; ?>";
    document.getElementById("informe").value = "<?php echo $tecnologia_tc['informe']; ?>";
    document.getElementById("descripcion").value = "<?php echo $tecnologia_tc['descripcion']; ?>";

</script>