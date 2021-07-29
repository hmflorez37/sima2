<?php

class producto {
    private $id_item;
    private $nombre_prod;
    private $id_marcas;
    private $costo_producto;
    private $cantidad_prod;

    public function __construct($id,$nombre,$marca,$costo,$cantidad){
        $this->id_item = $id;
        $this->nombre_prod = $nombre;
        $this->id_marcas = $marca;
        $this->costo_producto = $costo;
        $this->cantidad_prod = $cantidad;
    }
    public function obtenerId() {
        return $this->id_item;
    }
    public function obtenerNombre() {
        return $this->nombre_prod;
    }
    public function obtenerMarca() {
        return $this->id_marcas;
    }
    public function obtenerCosto() {
        return $this->costo_producto;
    }
    public function obtenerCant() {
        return $this->cantidad_prod;
    }


}
