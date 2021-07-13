<?php

class producto {
    private $id_item;
    private $nombre_prod;
    private $id_marcas;
    private $fecha_vencimiento;
    private $cantidad_prod;

    public function __construct($id,$nombre,$marca,$fechaven,$cantidad){
        $this->id_item = $id;
        $this->nombre_prod = $nombre;
        $this->id_marcas = $marca;
        $this->fecha_vencimiento = $fechaven;
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
    public function obtenerFecha() {
        return $this->fecha_vencimiento;
    }
    public function obtenerCant() {
        return $this->cantidad_prod;
    }


}