<!DOCTYPE html>
<html lang="en">

<?php require_once("conexion.php");?>
<?php require_once("bloqueo.php"); ?>
<?php require_once("partes/HEAD.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">

<?php require_once("partes/header.php"); ?>

    <div class="container-fluid">
        <div class="row">

<?php require_once("partes/nav.php"); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <h1>principal</h1>
    </main>
</div>
</div>    


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 

<?php require_once("modulos/plantilla.php"); ?>

</div>
    
<?php require_once("partes/scripts.php"); ?>

</body>
</html>