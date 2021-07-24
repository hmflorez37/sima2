<?php

require_once '../modelos/selectajax.php';
$lista= new selectajax();
$datos=$lista->lista_cliente();
$prod=$lista->lista_producto();

switch($_GET["op"]){

    case "combo":
        
        if(is_array($datos)==true and count($datos)>0){
            $html= "<option></option>";
            foreach($datos as $row){
                $html.= "<option value='".$row['id_cliente']."'>".$row['nombre']."--".$row['id_cliente']."</option>";
            }
            echo $html;      
        }
    break;
    
}
switch($_GET["pro"]){

    case "combo":
        
        if(is_array($prod)==true and count($prod)>0){
            $html= "<option></option>";
            foreach($prod as $row){
                $html.= "<option value='".$row['id_item']."'>".$row['nombre_prod']."</option>";
            }
            echo $html;      
        }
    break;
    
}

/*$PV = new selectajax();
$dato = $PV->lista_producto();
echo json_encode($dato);*/