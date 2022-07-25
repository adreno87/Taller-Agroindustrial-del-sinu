<!DOCTYPE html>
    <html lang="es">


<?php require_once("../../bloqueo.php"); ?>
<?php require_once("../../conexion.php"); ?>

<?php 

$control =$_GET[ 'control' ];

switch($control){

    case 0:
        $_SESSION[ 'productos' ] = array();
        $_SESSION[ 'cantidades' ] = array();
        $_SESSION[ 'valor_unidad' ] = array();
        $_SESSION[ 'subtotales' ] = array();
        break;
    case 1:
        array_push($_SESSION[ 'productos' ], $_POST[ 'producto' ]);
        array_push($_SESSION[ 'cantidades' ], $_POST[ 'cantidad' ]);

        $conpro = "select * from productos where id = "  . $_POST[ 'producto' ];
        $respro = mysqli_query($conexion, $conpro)or die("no consulto producto");
        $pro = mysqli_fetch_array($respro);

        array_push($_SESSION[ 'valor_unidad' ], $pro[ 'valor' ]);

        $subtotal = $_POST[ 'cantidad' ] * $pro[ 'valor' ];
        array_push($_SESSION[ 'subtotales' ], $subtotal);
        break;


}

?>



<?php require_once("../../partes/HEAD2.php"); ?>




<body class="hold-transition sidebar-mini layout-fixed">

    <?php require_once("../../partes/header.php"); ?>
    <?php require_once("../../partes/nav.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"> 
    <!-- <div class="breadcrumb-item active"> -->
        <br>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-md-4">
        <h1>Ventas</h1>





<h4>Ingresar productos</h4>

<form  method="post"  action="insertarventas.php?control=1">
   <div class="row">


<div class="col-lg-4"></div>
<div class="col-lg-4">
<select name="producto" class="form-control form-select">


<?php  
$conpro2 = "select * from productos order by nombre";
$respro2 = mysqli_query($conexion,$conpro2)or die("no se consulto producto2");
while($pro2 = mysqli_fetch_array($respro2)){
?>

<option    value="<?php echo $pro2[ 'id' ];?>"   label="<?php echo $pro2[ 'nombre' ];?>" > <?php echo $pro2[ 'nombre' ];?>  </option>

<?php } ?>

</select>

<br>

<input  type="number" name="cantidad" required="required" placeholder="cantidad" min="1" value="1">
<br>


<input type="submit" name="boton" value="Enviar">

</div>
<div class="col-lg-4"></div>



   </div>

</form>




</main>


</div>










<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
    

</body>

<script src="../../js/funciones_v.js"></script>
<?php require_once("../../partes/scripts.php");?>


</html>