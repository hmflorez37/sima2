<?php

class cliente{

    private $id_cliente;
    private $nombre;
    private $apellido;
    private $telefono;
    private $direccion;
    private $email;

    public function __construct($id,$nombre,$ape,$tel,$dir,$mail){
        $this->id_cliente = $id;
        $this->nombre = $nombre;
        $this->apellido = $ape;
        $this->telefono = $tel;
        $this->direccion = $dir;
        $this->email = $mail;
    }
    public function obtenerId() {
        return $this->id_cliente;
    }
    public function obtenerNombre() {
        return $this->nombre;
    }
    public function obtenerApellido() {
        return $this->apellido;
    }
    public function obtenerTelefono() {
        return $this->telefono;
    }
    public function obtenerDireccion() {
        return $this->direccion;
    }
    public function obtenerEmail() {
        return $this->email;
    }
}