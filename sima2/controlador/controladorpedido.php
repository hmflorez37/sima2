<?php
class controlpedido{

    public function pedido($producto,$cant){

            $gestionpedido = new pedidoGestion();
            $consulta = $gestionpedido->prodPedido($producto,$cant);

    }
    public function eliminarPedido($indice){
        $eliminarpedido= new pedidoGestion();
        $proceso = $eliminarpedido->eliminarprodlistado($indice);


    }
}