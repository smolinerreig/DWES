<html>
    <?php include 'lib/database.php'; ?>
    <?php include 'parciales/head.php';?>
    <body>
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 >MATH_DICE</h1>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <div class="well fondo-negro">
                <?php if($_GET['error']==1){ ?>
                 <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="well error"><strong>Tu nombre de usuario no existe.<br> Puedes crear uno mediante el siguiente formulario.</strong></p>
                    </div>
                </div>
                <?php }else if($_GET['error']==2){ ?>
                 <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="well error"><strong>El nombre que has escogido ya existe.<br>Búscate otro, copión.</strong></p>
                    </div>
                </div>
                <?php } ?>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 >NUEVO USUARIO</h4>
                    </div>
                </div>
                <form enctype="multipart/form-data" action="index.php?nuevo=1" method="POST">
                    <div>
                        <div class="form-group">
                            <label for="num1">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="p.ej: Aitor">
                        </div>
                        <div class="form-group">
                            <label for="num2">Apellidos</label>
                            <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="p.ej: Tilla Depatatas">
                        </div>
                        <div class="form-group">
                            <label for="num2">Edad</label>
                            <input type="text" name="edad" class="form-control" id="edad" placeholder="p.ej: 72">
                        </div>     
                        <div class="radio">
                          <label>
                            <input type="radio" name="sexo" id="hombre" value="Hombre" checked>
                            Hombre
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="sexo" id="mujer" value="Mujer">
                            Mujer
                          </label>
                        </div>
                        <div class="form-group">
                            <label for="num2">Contraseña</label>
                            <input type="password" name="pass1" class="form-control" id="pass1">
                        </div>
                        <div class="form-group">
                            <label for="num2">Repite la contraseña</label>
                            <input type="password" name="pass2" class="form-control" id="pass2">
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-lg" action="index.php?nuevo=1">Guardar datos</button>
                                <button type="button" class="btn btn-warning btn-lg" action="index.php" onclick="window.history.back();">Volver atrás</button>
                            </div>
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
