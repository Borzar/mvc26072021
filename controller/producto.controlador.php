<?php

require_once 'model/producto.php';

Class ProductoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        print "Controlador de producto";
        $this->modelo = new Producto();
    }

    public function inicio(){
        require_once "views/header.php";
        require_once "views/inicio/producto.php";

    }

    public function crearProducto(){
        require_once "views/header.php";
        require_once "views/inicio/crearproducto.php";

    }

    public function buscarProducto(){
        require_once "views/header.php";
        require_once "views/inicio/buscarproducto.php";

    }

    
    public function Grabar(){
        $producto = new Producto();
        $producto->setNombre($_POST['nombre']);
        $producto->setCantidad($_POST['cantidad']);
        $producto->setPrecio($_POST['precio']);

        $this->modelo->Insertar($producto);

        header("location:?controller=producto");
    }

    public function Buscar(){
        //instancia a la clase producto para usar su estructura.
        $producto = new Producto();
        $producto = $this->modelo->BuscarProducto($_POST['nombre']);
        //luego el controlador debe llamar a una vista para desplegar los datos contendios
        //en el objeto.
        require_once "views/header.php";
        require_once 'views/inicio/listadobusqueda.php';
    }

    public function FormActualizarProducto(){
        
        $producto = new Producto();
        if(isset($_GET['nombre'])){
            $producto = $this->modelo->buscarProducto($_GET['nombre']);
        }
        //debo mostrar los datos en una vista para actualizar
        require_once "views/header.php";
        require_once "views/inicio/actualizarproducto.php";

    }

    public function ActualizarProducto(){

        $producto = new Producto();
        $producto->setNombre($_POST['nombre']);
        $producto->setCantidad($_POST['cantidad']);
        $producto->setPrecio+($_POST['precio']);
        //var_dump($producto);
        $this->modelo->Actualizar($producto);

        header("location:?controller=producto");
    }

    public function Borrar(){

        $this->modelo->Eliminar($_GET['nombre']);
        header("location:?controller=producto");

    }



}