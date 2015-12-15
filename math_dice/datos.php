<?php include 'parciales/include.php'; ?>

<?php if ($_POST['nombre'] && $_POST['apellidos'] && $_POST['edad'] && $_POST['sexo']) {
    $_SESSION['jugador']->nombre = $_POST['nombre'];
    $_SESSION['jugador']->apellidos = $_POST['apellidos'];
    $_SESSION['jugador']->edad = $_POST['edad'];
    $_SESSION['jugador']->sexo = $_POST['sexo'];
    $db = new Database();
    $db->actualizarDatosUsuario($_SESSION['jugador']->id); 
}
?>
<html>
    <?php include 'parciales/head.php'; ?>
    <body>
        <div class="container">
            <?php require_once 'parciales/menu.php'; ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="well fondo-negro">
                        <form enctype="multipart/form-data" action="datos.php" method="POST">
                            <div>
                                <div class="form-group">
                                    <label for="num1">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" id="nombre" value=<?php echo $_SESSION['jugador']->nombre; ?>>
                                </div>
                                <div class="form-group">
                                    <label for="num2">Apellidos</label>
                                    <input type="text" name="apellidos" class="form-control" id="apellidos" value=<?php echo $_SESSION['jugador']->apellidos; ?>>
                                </div>
                                <div class="form-group">
                                    <label for="num2">Edad</label>
                                    <input type="text" name="edad" class="form-control" id="edad" value=<?php echo $_SESSION['jugador']->edad; ?>>
                                </div>    
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sexo" id="hombre" value="Hombre" <?php if( $_SESSION['jugador']->sexo=="Hombre"){echo "checked";}?>>
                                        Hombre
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sexo" id="mujer" value="Mujer" <?php if( $_SESSION['jugador']->sexo=="Mujer"){echo "checked";}?>>
                                        Mujer
                                    </label>
                                </div> 
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-lg" action="datos.php">Cambiar datos</button>
                                    <button type="button" class="btn btn-warning btn-lg" action="index.php" onclick="window.history.back();">Volver atrás</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>
