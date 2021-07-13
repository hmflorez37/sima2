<?php

class gestorProducto {
    private $pdo;

    public function __construct(){
        require_once ("databasepdo.php");
        $pdo=new base();
        $this->pdo=$pdo->construct();

    }

    public function listado(){

        $consulta=(isset($_POST['buscar']))?$_POST['buscar']:"";
    if(!$consulta){
        $sentencia=$this->pdo->prepare("SELECT * FROM producto");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $listaProductos;
    
    }else {
        $consulta=(isset($_POST['buscar']))?$_POST['buscar']:"";
        $sentencia=$this->pdo->prepare("SELECT id_item , nombre_prod , id_marcas , fecha_vencimiento , cantidad_prod FROM producto where id_item like '%".$consulta."%' or nombre_prod like '%".$consulta."%' or id_marcas like '%".$consulta."%' ");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $listaProductos;
        
    
        }
    
    }   
    public function guardarprod(producto $producto){
        $id_item = $producto->obtenerId();
        $nombre_prod = $producto->obtenerNombre();
        $id_marcas = $producto->obtenerMarca();
        $fecha_vencimiento = $producto->obtenerFecha();
        $cantidad_prod = $producto->obtenerCant();
        $sentencia=$this->pdo->prepare("INSERT INTO producto (`id_item`, `nombre_prod`, `id_marcas`, `fecha_vencimiento`, `cantidad_prod`) VALUES('$id_item','$nombre_prod','$id_marcas','$fecha_vencimiento','$cantidad_prod')");
        $sentencia->execute();
        

    }
    public function editarprod(producto $producto){
        require_once ("databasepdo.php");
        $pdo=new base();
        $pdo=$pdo->construct();
        $id_item = $producto->obtenerId();
        $nombre_prod = $producto->obtenerNombre();
        $id_marcas = $producto->obtenerMarca();
        $fecha_vencimiento = $producto->obtenerFecha();
        $cantidad_prod = $producto->obtenerCant();

        $sentencia=$pdo->prepare("UPDATE `producto` SET `id_item`='$id_item',`nombre_prod`='$nombre_prod',`id_marcas`='$id_marcas',`fecha_vencimiento`='$fecha_vencimiento',`cantidad_prod`='$cantidad_prod' WHERE `id_item`='$id_item'");
            $sentencia->execute();
    }
}
