<?php
class controlventa{

    public function ventatemp($producto,$cant){

            $gestionVentas = new gestionventas();
            $consulta = $gestionVentas->prodventa($producto,$cant);

    }
    public function eliminarProd($indice){
        $eliminarprodventa= new gestionventas();
        $proceso = $eliminarprodventa->eliminarprodlistado($indice);


    }
}
