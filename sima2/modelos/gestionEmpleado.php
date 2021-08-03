<?php

class gestionEmpleados{

    private $pdo;

    public function __construct(){
        require_once ("databasepdo.php");
        $pdo=new base();
        $this->pdo=$pdo->construct();

    }

    public function listarEmpleados(){

        $consulta=(isset($_POST['buscare']))?$_POST['buscare']:"";
    if(!$consulta){
        $sentencia=$this->pdo->prepare("SELECT * FROM empleado");
        $sentencia->execute();
        $listaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $listaEmpleados;
    
    }else {
        $consulta=(isset($_POST['buscare']))?$_POST['buscare']:"";
        $sentencia=$this->pdo->prepare("SELECT id_empleado , nombre_empleado , apellido_empleado , telefono_empleado , direccion_empleado , cargo_empleado FROM empleado where id_empleado like '%".$consulta."%' or nombre_empleado like '%".$consulta."%' or apellido_empleado like '%".$consulta."%' or telefono_empleado like '%".$consulta."%' or cargo_empleado like '%".$consulta."%' ");
        $sentencia->execute();
        $listaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $listaEmpleados;
        
    
        }
    
    }   
    public function guardarEmpleado(Empleado $empleado){
        $doc = $empleado->obtenerid_emp();
        $nombre_emp = $empleado->obtenerNombre_emp();
        $apellido_emp = $empleado->obtenerApellido_emp();
        $celular_emp = $empleado->obtenerTelefono_emp();
        $direccion_emp = $empleado->obtenerDireccion_emp();
        $email= $empleado->obtenerEmail();
        $cargo = $empleado->obtenercargo();
        $sentencia=$this->pdo->prepare("INSERT INTO `empleado`(`id_empleado`, `nombre_empleado`, `apellido_empleado`, `telefono_empleado`, `direccion_empleado`,`email_empleado`, `cargo_empleado`) VALUES('$doc','$nombre_emp','$apellido_emp','$celular_emp','$direccion_emp','$email','$cargo')");
        $sentencia->execute();
        

    }
    public function editarEmpleado(Empleado $empleado){
        $id_empleado = $empleado->obtenerid_emp();
        $nombre_empleado = $empleado->obtenerNombre_emp();
        $apellido_empleado = $empleado->obtenerApellido_emp();
        $telefono_empleado = $empleado->obtenerTelefono_emp();
        $direccion_empleado = $empleado->obtenerDireccion_emp();
        $email= $empleado->obtenerEmail();
        $cargo_empleado = $empleado->obtenercargo();

        $sentencia=$this->pdo->prepare("UPDATE `empleado` SET `nombre_empleado`='$nombre_empleado',`apellido_empleado`='$apellido_empleado',`telefono_empleado`='$telefono_empleado',`direccion_empleado`='$direccion_empleado',`email_empleado`='$email',`cargo_empleado`='$cargo_empleado' where `id_empleado`='$id_empleado'");
            $sentencia->execute();
    }
}
