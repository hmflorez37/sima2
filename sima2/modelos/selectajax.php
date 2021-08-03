<?php
class selectajax{

        public function __construct(){
            require_once ("databasepdo.php");
            $pdo=new base();
            $pdo=$pdo->construct();
    
        }

        public function lista_cliente(){
            require_once ("databasepdo.php");
            $pdo=new base();
            $pdo=$pdo->construct();
            $sentencia=$pdo->prepare("SELECT * FROM cliente");
            $sentencia->execute();
            $listacliente=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $listacliente;

            }
        public function lista_producto(){
            require_once ("databasepdo.php");
            $pdo=new base();
            $pdo=$pdo->construct();
            $sentencia=$pdo->prepare("SELECT * FROM producto");
            $sentencia->execute();
            $listaproducto=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $listaproducto;
        }
        public function lista_proveedor(){
            require_once ("databasepdo.php");
            $pdo=new base();
            $pdo=$pdo->construct();
            $sentencia=$pdo->prepare("SELECT * FROM proveedor");
            $sentencia->execute();
            $listaproveedor=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $listaproveedor;    
        }
}