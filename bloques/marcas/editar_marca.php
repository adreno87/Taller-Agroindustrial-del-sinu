<?php

    $mid = $_GET['id'];

    $edim = "SELECT * FROM marca WHERE id = '$mid'";
    $resula = mysqli_query($conexion, $edim) or die("Error en la consulta");
    $marca_ed = mysqli_fetch_array($resula);

    //editar
    //editar
    if(isset($_POST["boton"])){
        $rid = $_POST["nombre"];
        
        
        

        






        $insertar_m = "INSERT INTO marcas (nombre) VALUES ('$marcas')";
        
        mysqli_query($conexion, $insertar_m) or die("Error en la consulta");
        
        header("Location: ../../marcas.php");

    }

?>







<div id="formulario" style="display: none;">

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $marca_ed['id'];?>"   >
        <table>

        
        



      

            
            <tr>
                <th>Marca</th>
                <td><input type="text" name="nombre" required="required" placeholder="Marca" class="form-control" ></td>
            </tr>

                <th>
                    <button name="cancelar" value="insertar" type="button" class="btn btn-outline-warning" class="btn btn-warning" onclick="abrirformulario('cerrar')" >Cancelar</button>
                </th>

                <td><input type="submit" name="boton" value="Insertar" class="btn btn-outline-success"></td>
            
        </table>
    </form>
<br>






</div>



<div id= formulario>
<table     style="width:500px"     width="100%"  border="1"  cellspacing="0" class="table table-striped">
<tr  class="table table-dark">
<th>#</th> 
   <th>marca</th>
    <th></th>
    <th></th>

    
    


</tr>



<?php 

$consulta_m = " SELECT * FROM marcas order by id";
$resultado_m = mysqli_query($conexion,$consulta_m) or die('no se consulto las marcas');
while($marcas = mysqli_fetch_array($resultado_m)){


?>






<tr>

<td  ><?php echo $marcas[ 'id' ]; ?></td>
    <td    ><?php echo $marcas[ 'nombre' ]; ?></td>

    

    <td        style="width:150px;"          >  <img src="img/editar.jpg"  width="23"  title="Editar"   alt=""   >  </td>   
    <td  style="width:150px;"       >  <img src="img/eliminar.jpg"  width="30" style="cursor:pointer;"  title="eliminar"   onclick="eliminarmarca(<?php echo $marcas[ 'id' ]; ?>);"  alt="">  </td>


</tr>

<?php }  ?>


</table>






 </div>
 <br>

 </div>






 <script src="../../js/funciones_m.js"> </script>

 