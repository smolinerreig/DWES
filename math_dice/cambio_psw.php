<?php include 'parciales/include.php'; ?>

<html>
    <?php include 'parciales/head.php'; ?>
    <body>
        <div class="container">
            <?php require_once 'parciales/menu.php'; ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="well fondo-negro">
                        <h2>CAMBIO DE CONTRASEÑA</h2><br>
                        <form enctype="multipart/form-data" action="datos.php?exito=2" method="POST">
                            <div>
                                <div class="form-group">
                                    <label for="num2">Contraseña actual</label>
                                    <input type="password" name="pass0" class="form-control" id="pass0">
                                </div>
                                <div class="form-group">
                                    <label for="num2">Contraseña nueva</label>
                                    <input type="password" name="pass1" class="form-control" id="pass1">
                                </div>
                                <div class="form-group">
                                    <label for="num2">Repite la contraseña nueva</label>
                                    <input type="password" name="pass2" class="form-control" id="pass2">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-lg" action="datos.php">Cambiar contraseña</button>
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
