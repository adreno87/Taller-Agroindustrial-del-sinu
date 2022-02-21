<!DOCTYPE html>
<html lang="es">
<?php require_once("partes/HEAD.php"); ?>

<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
    <b>Taller Agroindustrial del Sinu</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body ">
        <p class="login-box-msg">Inicio de Sesion</p>

        <form action="" method="post">
            <div class="input-group mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Recuardame
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
    </div>
</div>




























<?php require_once("partes/scripts.php"); ?>

</body>
</html>