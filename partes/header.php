    <nav style="background-color:#46A41D" class="main-header navbar navbar-expand navbar-white navbar-danger" >
    <!-- Informacion usuario --> 
    <span style= "color:black;">
        Bienvenido <?php echo $user ["nombre"] ; ?> - Estado:
        <?php
          switch ($user ["estado"]){
            case 1:
                echo "ACTIVO";
                break;
            case 0:
                echo "INACTIVO";
                break;    
          }

        ?>
    </span> 

    <!-- ----------------- -->   
    <ul class="navbar-nav">
        <li class="nav-item" >
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="plantilla.php" class="nav-link">INICIO</a>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="salir.php" class="nav-link">CERRAR SESIÓN</a>
        </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">


        <!--configuracion-->
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
            </a>
        </li>
        </ul>
    </nav>
