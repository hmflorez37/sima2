<?php
class controlCliente{

    public function volver($ruta){
        require_once($ruta);
}


    public function listaClientes(){
require_once '../modelos/clienteGestion.php';
    $listar = new gestionCliente();
    $listaclientes =  $listar->listarclientes();
    return $listaclientes;
    
    }
    public function guardarCliente($id,$nombre,$ape,$tel,$dir,$mail){

        $cliente = new cliente($id,$nombre,$ape,$tel,$dir,$mail);
        $gestionCliente = new gestionCliente();
        $consulta = $gestionCliente->guardarCliente($cliente);
        


}
public function editarCliente($id,$nombre,$ape,$tel,$dir,$mail){

    $cliente = new cliente($id,$nombre,$ape,$tel,$dir,$mail);
    $gestionCliente = new gestionCliente();
    $consulta = $gestionCliente->editarCliente($cliente);
        


}
}