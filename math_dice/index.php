<?php include 'parciales/include.php'; ?>
<?php

    if ($_GET['nuevo'] == 1){
        $db = new Database();
        $res=$db->consulta('select * from usuario where nombre="'.$_POST['nombre'].'"');
        if(count($res)<1){
            $db->insertarUsuario($_POST['nombre'], $_POST['apellidos'], $_POST['edad'], $_POST['sexo']);
            $jug=$db->getDatosUsuario($_POST['nombre']);
            $jugador = new Jugador($jug['id'], $jug['nombre'], $jug['apellidos'], $jug['edad'], $jug['puntos'], $jug['sexo']);
            $_SESSION['jugador'] = $jugador;
        }else{
            header('Location: nuevo_usuario.php?error=2');
        }
    }else if ($_GET['s'] == 'down') {
        session_destroy();
        header('Location: login.php');
    } else {
        if ($_POST['nombre']) {
            $db = new Database();
            $res=$db->consulta('select * from usuario where nombre="'.$_POST['nombre'].'"');
            $jug=$db->getDatosUsuario($_POST['nombre']);
            if (count($res)!=0){
                $jugador = new Jugador($jug['id'], $jug['nombre'], $jug['apellidos'], $jug['edad'], $jug['puntos'], $jug['sexo']);
                $_SESSION['jugador'] = $jugador;
            }else{
                header('Location: nuevo_usuario.php?error=1');
            }
        } else {
            header('Location: login.php');
        }
    }
    if (isset($_SESSION['jugador'])) {
        header('Location: home.php?lang=sp');
    }
    
?>

