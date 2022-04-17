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
        <h1>contabilidad</h1>
        
        <?php require_once("bloques/contabilidad/formulario_c.php"); ?>


        <br>
        <br>
        <?php
         if(isset($_GET["id"]) && $_GET["id"] > 0){
            require_once('bloques/contabilidad/editar_c.php'); 
         }else{
            require_once('bloques/contabilidad/consulta_c.php');
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

    <script src="js/funciones.js"></script>
    <?php require_once("partes/scripts.php");?>
    

    </html>