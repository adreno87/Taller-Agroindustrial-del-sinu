<!DOCTYPE html>
<html lang="es">
<?php require_once("partes/HEAD.php"); ?>




<body class="hold-transition login-page1">

<div class="login-box">
<div class="logofoto">
        <img src="img/logoSINU.png" alt="">
</div>
    <div class="login-logo">
        <!-- <b class="colortitulo">Taller Agroindustrial del Sinu</b> -->
        <br>
        
        
    </div>
    <!-- /.login-logo -->
    
                

                <form class="box" action="login.php" method="post">
                <h4 >Taller Agroindustrial del Sinu</h4>
                    <div class="input-group mb-3">
                        <input type="text" name="usuario" placeholder="usuario">
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="Clave" id="Clave" placeholder="Contraseña">
                    </div>

                    

                    <div class="col-mb3">
                            <input type="submit" name="boton" value="Login">
                    </div>
                </form>
        
            
    
</div>
    




























<?php require_once("partes/scripts.php"); ?>

</body>
</html>