<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
    <!-- Main content -->
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
                    <th></th>
                    <th></th>
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
                      <td><a href="../../informes/CONT/<?php echo $contabilidad['informe']; ?>" target="_blank"><?php echo $contabilidad['informe']; ?></a></td>
                      <td><?php echo $contabilidad['descripcion']; ?></td>
                        
                              <td><button onclick="window.location = 'contabilidad.php?id=<?php echo $contabilidad['id']; ?>'" title="Editar" type="button" class="btn btn-success"> <i class="fas fa-pencil-alt">
                              </i>Editar</button></td>
                              <td><button  onclick="eliminarinforme_co(<?php echo $contabilidad['id']; ?>);" title="Borrar" type="button" class="btn btn-danger"> <i class="fas fa-trash">
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
    <!-- /.content -->
    
