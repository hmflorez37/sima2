<?php
class base{
private $servername = "127.0.0.1";
private $username = "root";
private $password = "";
private $bd = "sima";
private $pdo;



public function construct(){
    $connectionString = "mysql:host=".$this->servername.";dbname=".$this->bd.";charset=utf8";
    try {
        $this->pdo = new PDO($connectionString,$this->username,$this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->pdo;
    } catch (PDOException $e){
        $this->pdo = 'error de conexion';
        echo "ERROR: ". $e->getMessage();
    }
    
}


}
