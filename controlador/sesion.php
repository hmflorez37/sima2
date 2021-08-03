<?php
$userna = (isset($_POST['user-name']))?$_POST['user-name'] :'';
$pass = (isset($_POST['password']))?$_POST['password'] :'';

if ($pass){
    $envio= new iniciosesion();
    $envio->inicio($userna,$pass);
}

class iniciosesion {

    

    public function inicio($username,$password){
        require_once("../modelos/sesion.php");
    $valores= new sesion();
    $iniciar = $valores->iniciar($username,$password);




    }

}