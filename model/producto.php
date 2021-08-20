<?php
//clase pojo, una clase pojo es una clase plana que incluye variables, get and set.

require_once 'bd.php';

Class Producto{

    private $cantidad;
    private $nombre;
    private $precio;

    private $pdo;

    public function __CONSTRUCT(){
        $this->pdo = BD::Conectar();
    }

    public function getCantidad() :?string{
        return $this->cantidad;
    }

    public function setCantidad(string $cantidad){
        $this->cantidad = $cantidad;
    }

    public function getNombre() :?string{
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function getPrecio() :?string{
        return $this->precio;
    }

    public function setPrecio(string $precio){
        $this->precio = $precio;
    }

    /* El siguiente paso es crear los metodos del mantenedor de la tabla trabajada */ 

    public function Insertar(Producto $producto){
        try {
            $consulta = "insert into producto(nombre, cantidad, precio) values (?,?,?)";
            $this->pdo->prepare($consulta)->execute(array($producto->getNombre(), $producto->getCantidad(), $producto->getPrecio()));
        } catch (Exception $e) {
           die($e->getMessage());
        }
    }

     public function BuscarProducto($nombre){
            try {
                $consulta = $this->pdo->prepare("select * from producto where nombre = ?; ");
                $consulta->execute(array($nombre));
                $resultado = $consulta->fetch(PDO::FETCH_OBJ);
    
                $producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setCantidad($resultado->cantidad);
                $producto->setPrecio($resultado->precio);
                return $producto;
    
            } catch (Exception $e) {
    
                die($e->getMessage());
            }
    
        }

        public function Listar(){
            try {
                $consulta = $this->pdo->prepare("select * from producto");
                $consulta->execute();
                return $consulta->fetchall(PDO::FETCH_OBJ);
    
            } catch (Exception $e) {
                die($e->getMessage());
            }
    
    
        }


    }


