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

        $conpro = "select * from productos where id = "  . $_POST[ 'productos' ];
        $respro = mysqli_query($conexion,$conpro)or die("no consulto producto");
        $pro = mysqli_fetch_array($respro);

        array_push($_SESSION[ 'valor_unidad' ], $pro[ 'precio_venta' ]);

        $subtotal = $_POST[ 'cantidad' ] * $pro[ 'precio_venta' ];
        array_push($_SESSION[ 'subtotales' ], $subtotal);
        break;


}

?>

<h4>Ingresar productos</h4>

<form  method="post"  action="insertarventas.php?control=1">
   <div class="row">


<div class="col-lg-4"></div>
<div class="col-lg-4">
<select name="producto" class="form-control form-select">


<?php  
$conpro2 = "select *from productos order by nombre";
$respro2 = mysqli_query($conexion,$conpro2)or die("no se consulto producto2");
while($pro2 = mysqli_fetch_array($respro2)){
?>

<option    value="<?php echo $conpro2[ 'id' ];?>"   label="<?php echo $conpro2[ 'nombre' ];?>" > <?php echo $conpro2[ 'nombre' ];?>        </option>

<?php } ?>

</select>

<br>

<input  type="datetime-local" name="cantidad" required="required" placeholder="cantidad" min="1" value="1">

<br>


</div>
<div class="col-lg-4"></div>



   </div>

</form>