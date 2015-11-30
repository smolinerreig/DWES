<html>
    <?php include 'parciales/head.php';?>
    <body>
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 >MATH_DICE</h1>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <div class="well fondo-negro">
                <form enctype="multipart/form-data" action="index.php" method="POST">
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
                        <div class="text-center"><button type="submit" class="btn btn-success btn-lg" action="index.php">¡Jugar a Math Dice!</button></div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
