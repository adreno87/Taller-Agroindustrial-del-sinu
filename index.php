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
    
    
                

                <form  action="login.php"   method ="post" class="box" action=""method="post" >
                    
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="usuario"  placeholder="usuario"  >
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="clave" id="Clave" placeholder="Clave">
                    </div>

                    

                    <div class="col-mb3">
                            <input type="submit" name="boton" value="Login">
                    </div>
                </form>
        
            
    
</div>
    




























<?php require_once("partes/scripts.php"); ?>

</body>
</html>