<?php

Class BD{

    const servidor = "localhost:3306";
    const usuario = "root";
    const clave = "";
    const bd = "dbic207iecire0l";

    public static function Conectar(){

        try {
            $conexion = new PDO("mysql:host=".self::servidor.";dbname=".self::bd."; charset=utf8", self::usuario, self::clave);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;

        } catch (PDOException $e) {
            return "Ha ocurrido un error".$e->getMessage();
        }
    }

}