<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php include "partes/HEAD.php";?>
     <?php include "bloqueo.php";?>
    <title>Document</title>
</head>
<body>
    <div class="container p-4">
            <div class="card card-body">
                <div class="card">

                <table class="">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USER</th>
                            <th>PASS</th>
                            <th>ACCION</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "partes/consulta.php";
                                if($consulta>0)
                     {
                         while($campos=mysqli_fetch_array($sql)){

                        
                    ?>
                    <tr>
                        <td><?php echo $campos[0];?></td>
                        <td><?php echo $campos[1];?></td>
                        <td><?php echo $campos[2];?></td>
                       
                        <td><img src="<?php echo substr($campos['imagen'],3)?>"width="70%" alt=""></td>
                        <td>
                            <a href="actualizar.php?id=<?php echo $campos['id'];?>" ><button type="submit" class="btn btn-success">EDIT</button></a>
                            <a href="partes/delete.php?id=<?php echo $campos['id'];?>" ><button type="submit" class="btn btn-warning">DELETE</button></a>
                        </td>
                    </tr>
                    <?php
                     }
                    }
                    ?>
                </tbody>
                </table>
                
                </div>

            </div>

    </div>
</body>
</html>