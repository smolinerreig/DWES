<?php

class Jugador {

    public $nombre;
    public $apellidos;
    public $edad;
    public $puntuacion;
    public $sexo;

    function __construct($nombre, $apellidos, $edad, $puntuacion, $sexo) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->puntuacion = $puntuacion;
        $this->sexo = $sexo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function getEdad() {
        return $this->edad;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function getPuntuacion() {
        return $this->puntuacion;
    }

    function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }

}
