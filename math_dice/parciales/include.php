<?php
include 'modelos/jugador.php';
include 'modelos/juego.php';
include 'lib/database.php';
session_start();
if (!isset($_SESSION['jugador'])) {
        header('Location: login.php');
}
?>