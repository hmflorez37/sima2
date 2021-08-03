<?php
class controlEmpleado{


    public function volver($ruta){
        require_once($ruta);
}


    public function listaEmpleados(){
        require_once '../modelos/gestionEmpleado.php';
    $listar = new gestionEmpleados();
    $listaEmpleados =  $listar->listarEmpleados();
    return $listaEmpleados;
    
    }
    public function guardarEmpleado($doc,$nombre,$ape,$cel,$dir,$mail,$cargo){

        $empleado = new Empleado($doc,$nombre,$ape,$cel,$dir,$mail,$cargo);
        $gestionEmpleado = new gestionEmpleados();
        $consulta = $gestionEmpleado->guardarEmpleado($empleado);
        


}
public function editarEmpleado($doc,$nombre,$ape,$cel,$dir,$mail,$cargo){

    $empleado = new Empleado($doc,$nombre,$ape,$cel,$dir,$mail,$cargo);
    $gestionEmpleado = new gestionEmpleados();
    $consulta = $gestionEmpleado->editarEmpleado($empleado);
        


}
}