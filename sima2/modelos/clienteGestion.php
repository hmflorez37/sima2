<?php

class gestionCliente{

    private $pdo;

    public function __construct(){
        require_once ("databasepdo.php");
        $pdo=new base();
        $this->pdo=$pdo->construct();

    }

    public function listarClientes(){

        $consulta=(isset($_POST['buscarc']))?$_POST['buscarc']:"";
    if(!$consulta){
        $sentencia=$this->pdo->prepare("SELECT * FROM cliente");
        $sentencia->execute();
        $listaclientes=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $listaclientes;
    
    }else {
        $consulta=(isset($_POST['buscarc']))?$_POST['buscarc']:"";
        $sentencia=$this->pdo->prepare("SELECT id_cliente , nombre , apellido , telefono , direccion , email FROM cliente where id_cliente like '%".$consulta."%' or nombre like '%".$consulta."%' or apellido like '%".$consulta."%' or telefono like '%".$consulta."%' or email like '%".$consulta."%' ");
        $sentencia->execute();
        $listaclientes=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $listaclientes;
        
    
        }
    
    }   
    public function guardarCliente(cliente $cliente){
        $id_cliente = $cliente->obtenerId();
        $nombre = $cliente->obtenerNombre();
        $apellido = $cliente->obtenerApellido();
        $telefono = $cliente->obtenerTelefono();
        $direccion = $cliente->obtenerDireccion();
        $email = $cliente->obtenerEmail();
        $sentencia=$this->pdo->prepare("INSERT INTO cliente (`id_cliente`, `nombre`, `apellido`, `telefono`, `direccion`,`email`) VALUES('$id_cliente','$nombre','$apellido','$telefono','$direccion','$email')");
        $sentencia->execute();
        

    }
    public function editarCliente(cliente $cliente){
        $id_cliente = $cliente->obtenerId();
        $nombre = $cliente->obtenerNombre();
        $apellido = $cliente->obtenerApellido();
        $telefono = $cliente->obtenerTelefono();
        $direccion = $cliente->obtenerDireccion();
        $email = $cliente->obtenerEmail();

        $sentencia=$this->pdo->prepare("UPDATE `cliente` SET `nombre`='$nombre',`apellido`='$apellido',`telefono`='$telefono',`direccion`='$direccion' WHERE `id_cliente`='$id_cliente'");
            $sentencia->execute();
    }
}
