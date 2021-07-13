<?php
class controlventa{
    public function listarCliente(){}
    public function listarProdVenta(){
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
    /*
    
    public function cancelarVenta(){
        session_start();

unset($_SESSION["venta"]);
$_SESSION["venta"] = [];

header("Location: ../vistas/ventas/ventas.php?status=2");
    }
    public function terminarVenta(){}

}*/