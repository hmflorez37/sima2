<?php 

class controladorProveedor{
        public function volver($ruta){
                require_once($ruta);
        }

        public function listar (){
                require_once '../modelos/proveedorGestion.php';
                $lista=new gestorProveedor();
                $listaProveedor=$lista->listadoProveedor();
                return $listaProveedor; // revisar
                
        }
        
        
        public function guardarproveedor($idp,$nombrec,$ciu,$tel,$id,$nombrep){

                $proveedor = new proveedor($idp,$nombrec,$ciu,$tel,$id,$nombrep);
                $gestorProveedor = new gestorProveedor();
                $consulta = $gestorProveedor->guardarproveedor($proveedor);
                
        }
        public function editarproveedor($idp,$nombrec,$ciu,$tel,$id,$nombrep){

            $proveedor = new proveedor($idp,$nombrec,$ciu,$tel,$id,$nombrep);
            $gestorProveedor = new gestorProveedor();
            $consulta = $gestorProveedor->editarproveedor($proveedor);
            
        
        }
}