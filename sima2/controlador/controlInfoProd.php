<?php 

class controlInfoProd{
        public function volver($ruta){
                require_once($ruta);
        }

        public function listar (){
                require_once '../modelos/productoGestion.php';
                $lista=new gestorProducto();
                $listaProductos=$lista->listado();
                return $listaProductos;
                
        }
        



        public function guardarprod($id,$nombre,$marca,$fechaven,$cantidad){

                $producto = new producto($id,$nombre,$marca,$fechaven,$cantidad);
                $gestorProducto = new gestorProducto();
                $consulta = $gestorProducto->guardarprod($producto);
                $result = $gestorProducto->listado($consulta);
                


        }
        public function editarprod($id,$nombre,$marca,$fechaven,$cantidad){

                $producto = new producto($id,$nombre,$marca,$fechaven,$cantidad);
                $gestorProducto = new gestorProducto();
                $consulta = $gestorProducto->editarprod($producto);
                $result = $gestorProducto->listado($consulta);
                


        }
}