  <!-- Main Sidebar Container -->
  <!--menu izquierdo-->
  <aside style="background-color:#C1F4C5"class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" >   
      <img  src="img/logoSINU.png" alt="AdminLTE Logo"  height="99" width="99" class="img-circle elevation-9" style="opacity: .9">
    </a>

    <!-- Barra lateral usuario -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/descarga.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color:black"><?php echo $user['nombre'];  ?></a>
        </div>
      </div>

      <!-- Barra lateral buscar -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="BUSCAR" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" style:>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!--menu dependencias-->
          <li class="nav-item menu-open" >
            <a href="#" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-data-fill" viewBox="0 0 16 16">
            <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/><path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0V9a1 1 0 0 1 1-1Z"/></svg>
              <p style="color:black">
                Dependencias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php
                if($user['usuario']== 'admin'){
              ?>
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p style="color:black">Compras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p style="color:black">Ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contabilidad.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p style="color:black">Contabilidad</p>
                </a>
              </li>
              <?php
                }?>
              <li class="nav-item">
                <a href="R_Humanos.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p style="color:black">Recursos Humanos</p>
                </a>
              </li>
              <?php
                if($user['usuario']== 'admin'){
              ?>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="nav-icon far fa-circle text-indigo"></i>
                  <p style="color:black">Tecnologia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tabla.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-indigo"></i>
                  <p style="color:black">Tablas</p>
                </a>
              </li>
            </ul>
          </li>
          <!--opciones generar-->
          <li class="nav-header" style="color:black">GENERAR</li>
          <!--generar reportes-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p style="color:black">
                Reportes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">              
              <li class="nav-item">
                <a href="pages/examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:black">Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <!--generar tablas-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p style="color:black">
                Tablas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:black">Tabla simple</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:black">Tabla exel</p>
                </a>
              </li>              
            </ul>
          </li>
          <?php
                }?>
          <!--generar notificaciones-->
    <!-- /.sidebar -->
  </aside>