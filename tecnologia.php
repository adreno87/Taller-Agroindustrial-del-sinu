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
        <h1>Tecnologias</h1>
        <br>

        <div id="formulario">

        
        </div>
        <br>
        <div id="consulta">
        <table width="100%" border="5" cellspacing="0" >
            <tr>
                <th background-color="red" color="blue">id</th>
                <th>FECHA</th>
                <th>DESCRIPCION</th>
                <th>EQUIPO</th>
                <th>DEPARTAMENTO</th>
            </tr>
            <?php
                $consulta_t = "SELECT * FROM tecnologia ORDER BY id";
                $resultado_t = mysqli_query($conexion, $consulta_t) or die ("no se consulto tecnologia");
                while($tecnologia = mysqli_fetch_array($resultado_t)){
            ?>
            <tr>
                <td><?php echo $tecnologia['id']; ?> </td>
                <td><?php echo $tecnologia['fecha']; ?> </td>
                <td><?php echo $tecnologia['descripcion']; ?> </td>
                <td><?php echo $tecnologia['equipo']; ?> </td>
                <td><?php echo $tecnologia['departamento']; ?> </td>
                <td>
                    <img src="img/ver.JPG" width="25" title="ver" alt="">
                </td>
                <td>
                    <img src="img/editar.JPG" width="25" title="editar" alt="">
                </td>
                <td>
                    <img src="img/eliminar.JPG" width="25" title="eliminar" alt="">
                </td>
                <td>
                    <img src="img/descargar.JPG" width="25" title="descargar" alt="">
                </td>
            </tr>
            <?php } ?>
        </table>
        </div>




    </main>
</div>
</div>    


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 



</div>
    
<?php require_once("partes/scripts.php"); ?>

</body>
</html>