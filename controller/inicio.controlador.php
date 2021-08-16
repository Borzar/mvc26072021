<?php


class InicioControlador{

    public function __CONSTRUCT(){
        echo "Controlador de bienvenida";
    }

    public function inicio(){
        //solicitamos la vista de inicio
        require_once "views/header.php";
        require_once "views/inicio/principal.php";

    }
}
