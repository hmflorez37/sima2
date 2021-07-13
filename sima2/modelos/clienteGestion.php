<?php
class gestionCliente{

        $pdo=new base();
        $pdo=$pdo->construct();
class gestioCliente{
    public function listarClientes(){
        $sentencia=$pdo->prepare("SELECT * FROM cliente");
    $sentencia->execute();
    $listaclientes=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
}
}