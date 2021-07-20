<?php

class sesion{
    public function __construct(){
        require_once ("databasepdo.php");
        $pdo=new base();
        $pdo=$pdo->construct();
    }


    public function iniciar($userna,$pass){
        
        $username = $userna;
        $password = $pass;
        $sentencia = $this->pdo->prepare("SELECT * FROM usuarios ");
        $sentencia->execute();
        $result=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $datos){
        $nom=$datos['nom_user'];
        $pas=$datos['pass_user'];
        }
        if ($nom===$username){
            if ($pas === $password){
                header("Location: ../vistas/inicio/inicio.php");
            }
        }else{
            header("Location: ../index.php");
        }

        }


    }
