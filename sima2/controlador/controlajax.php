<?php

require_once '../modelos/selectajax.php';
$lista= new selectajax();
$datos=$lista->lista_cliente();
$prod=$lista->lista_producto();
$proveedor=$lista->lista_proveedor();
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
                $html.= "<option value='".$row['id_item']."'>".$row['nombre_prod']." --"$row['id_marcas']"</option>";
            }
            echo $html;      
        }
    break;
    
}

switch($_GET["proveedor"]){

    case "combo":
        
        if(is_array($proveedor)==true and count($proveedor)>0){
            $html= "<option></option>";
            foreach($proveedor as $row){
                $html.= "<option value='".$row['id_proveedor']."'>".$row['nombre_contacto']."--".$row['id_proveedor']."</option>";
            }
            echo $html;      
        }
    break;
    
}
