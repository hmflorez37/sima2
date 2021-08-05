<?php

class Empleado{

    private $doc;
    private $nombre_emp;
    private $apellido_emp;
    private $celular_emp;
    private $direccion_emp;
    private $email;
    private $clave;
    private $cargo;

    public function __construct($doc,$nombre,$ape,$cel,$dir,$email,$password,$cargo){
        $this->doc = $doc;
        $this->nombre_emp = $nombre;
        $this->apellido_emp = $ape;
        $this->celular_emp = $cel;
        $this->direccion_emp = $dir;
        $this->email = $email;
        $this->clave = $password;
        $this->cargo = $cargo;
    }
    public function obtenerid_emp() {
        return $this->doc;
    }
    public function obtenerNombre_emp() {
        return $this->nombre_emp;
    }
    public function obtenerApellido_emp() {
        return $this->apellido_emp;
    }
    public function obtenerTelefono_emp() {
        return $this->celular_emp;
    }
    public function obtenerDireccion_emp() {
        return $this->direccion_emp;
    }
    public function obtenerEmail() {
        return $this->email;
    }
    public function obtenerClave() {
        return $this->clave;
    }
    public function obtenercargo() {
        return $this->cargo;
    }
}