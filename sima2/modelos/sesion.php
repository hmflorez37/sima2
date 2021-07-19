<?php

class sesion{


    public function iniciar($userna,$pass){
        require_once ("databasepdo.php");
        $pdo=new base();
        $pdo=$pdo->construct();
        $username = $userna;
        $password = $pass;
        $sentencia = $pdo->prepare("SELECT * FROM usuarios ");
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
