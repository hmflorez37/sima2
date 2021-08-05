<?php
$dato=(isset($_POST['data']))?$_POST['data'] :"";
if ($dato = "stock"){
    $consulta=new consultasGraficos();
    $consulta=$consulta->consultastock();

}


class consultasGraficos{

    public function __construct(){

        require "../modelos/grafico.php";
        
    }

    public function consultaStock(){
    $MG = new modeloGrafico();
    $consulta = $MG->llamardatos();
    echo json_encode($consulta);
    }
    
}
