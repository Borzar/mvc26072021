<?php


if(!isset($_GET['controller'])){
    //si viene vacia la variable controller, enviaremos a la vista de inicio.
    require_once "controller/inicio.controlador.php";
    //creamos una instancia de clase inicio.controlador
    $controlador = new InicioControlador();
    //paso el nombre del objeto y el nombre del metodo.
    call_user_func(array($controlador, "inicio"));

}else{
    //el usuario selecciona una opcion.
    $controlador = $_GET['controller'];
    require_once "controller/$controlador.controlador.php";
    $controlador = $controlador."Controlador";
    $controlador = new $controlador;

    //vamos a anidar un if else para preguntar 
    if( isset($_GET['metodo'])){
        $metodo = $_GET['metodo'];
    }else{
        $metodo = "inicio";
    }

    call_user_func(array($controlador, $metodo));
}