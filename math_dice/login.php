<html>
    <?php include 'lib/database.php'; ?>
    <?php include 'parciales/head.php';?>
    <body>
        
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 >MATH_DICE</h1>
            </div>
        </div>
        <br>
        <div class="col-md-6 col-md-offset-3">
            <div class="well fondo-negro">
                <form enctype="multipart/form-data" action="index.php" method="POST">
                        <div class="form-group">
                            <label for="num1">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="p.ej: Aitor">
                        </div>
                        <div class="form-group">
                            <label for="num1">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="p.ej: 4170R M0L4 xd">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-lg">¡Entrar al juego!</button>
                        </div>
                </form>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <p class="error">¿Aún no tienes una cuenta?</p>
            <a href="nuevo_usuario.php"><button type="button" class="btn btn-warning btn-lg" action="">Nuevo usuario</button></a>
        </div>
    </body>
</html>
