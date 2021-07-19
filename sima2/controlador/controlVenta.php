<?php
class controlventa{
    public function listarCliente(){}
    public function listarProdVenta(){
        require_once("../../modelos/ventaGestion.php");
        $select = new gestionventas();
        $producto =$select->listarProducto();
        

    }

    public function ventatemp($producto,$cant){
        $producto= new producto($producto,'','','',$cant,);

            $gestionVentas = new gestionventas();
            $consulta = $gestionVentas->prodventa($producto);

    }
    public function eliminarProd($indice){
        $eliminarprodventa= new gestionventas();
        $proceso = $eliminarprodventa->eliminarprodlistado($indice);


    }
}
