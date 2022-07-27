<!DOCTYPE html>
    <html lang="en">
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
        <h1>Ventas</h1>
        
 
        <button class =" btn btn-primary"  onclick="window.location='bloques/ventas/insertarventas.php?control=0' ">Ingresar venta</button>

        <br>
        <br>
        
        

        <?php

        if(isset($_GET[ 'id' ]) && $_GET[ 'id' ] > 0  ){




        }
        else{
            require_once('bloques/ventas/consultas_v.php'); 

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

    <script src="js/funciones_v.js"></script>
    <?php require_once("partes/scripts.php");?>
    

    </html>
