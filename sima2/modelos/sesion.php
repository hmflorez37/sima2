<?php

class sesion{
    private $pdo;
    public function __construct(){
        require_once ("databasepdo.php");
        $pdo=new base();
        $this->pdo=$pdo->construct();
    }


    public function iniciar($userna,$pass){
        
        $username = $userna;
        $password = $pass;
        $sentencia = $this->pdo->prepare("SELECT * FROM empleado where email_empleado ='$username' ");
        $sentencia->execute();
        $result=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $datos){
        $nom=$datos['email_empleado'];
        $pas= $datos['password'];
        }
        if ($nom===$username){
            if ($pas === $password){
                session_start();
                if(!isset($_SESSION["venta"])) $_SESSION["venta"] = [];
                
                $_SESSION['nombre']= $datos['nombre_empleado'];
                $_SESSION['id']= $datos['id_empleado'];
                $_SESSION['tipo_usuario']= $datos['cargo_empleado'];
                header("Location: ../vistas/inicio/inicio.php");
            }
        }else{
            header("Location: ../index.php?login=1");
        }

        }


    }
