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
  <!--hi-->










    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Informes Tecnologia</h3>
              </div>
              <!-- /.card-body -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Equipo</th>
                    <th>Dependencia</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $consulta_tc = "SELECT * FROM tecnologia order by id desc";
                    $resultado_tc = mysqli_query($conexion, $consulta_tc) or die("Error en la consulta");
                    while ($tecnologia = mysqli_fetch_array($resultado_tc)) {
                    ?>
                    <tr>
                      <td><?php echo $tecnologia['id']; ?></td>
                      <td><?php echo $tecnologia['fecha']; ?></td>
                      <td><?php echo $tecnologia['descripcion']; ?></td>
                      <td><?php echo $tecnologia['equipo']; ?></td>
                      <td><?php echo $tecnologia['departamento']; ?></td>
                        

                      <td><button onclick="window.location = 'tecnologia.php?id=<?php echo $tecnologia['id']; ?>'" title="Editar" type="button" class="btn btn-success">
                      <i class="fas fa-pencil-alt">
                              </i>
                      Editar</button></td>
                      <td><button  onclick="eliminarinforme_tc(<?php echo $tecnologia['id']; ?>)" title="Borrar" type="button" class="btn btn-danger"> <i class="fas fa-trash">
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
                    <th>Equipo</th>
                    <th>Dependencia</th>
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
    <!-- /.content -->
    
