
<?php
include 'modelos/jugador.php';
include 'modelos/juego.php';
include 'lib/database.php';
?>

<html>
    <?php include 'parciales/head.php'; ?>
    <body>  
        <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php 
                            echo '<h2>POST</h2>';
                            echo '<pre>';
                            print_r($_POST);
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php 
                            echo '<h2>GET</h2>';
                            echo '<pre>';
                            print_r($_GET);
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php 
                            echo '<h2>SESION</h2>';
                            echo '<pre>';
                            print_r($_SESSION);
                            exit;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


