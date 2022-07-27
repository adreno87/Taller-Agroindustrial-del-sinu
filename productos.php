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
        <h1>Productos</h1>
        <br>

        
 
        <?php require_once('bloques/productos/formulario_p.php'); ?>
        

        <?php 
        
        if(isset($_GET['id'])&& $_GET['id']!=""){

            require_once('bloques/productos/editar_p.php');


        }else{
            require_once('bloques/productos/consultas_p.php');


        }
        
        
        
        
        ?>


        






    </main>


    </div>










    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
        
   
    </body>

    <script src="js/funciones_p.js"></script>
    


  
    <?php require_once("partes/scripts.php");?>
    

    </html>
