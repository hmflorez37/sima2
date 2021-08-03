<?php

class proveedor {

    private $id_proveedor;
    private $nombre_contacto;
    private $ciudad;
    private $telefono_contacto;
    private $email;
    private $nombre_proveedor;

    public function __construct($idp,$nombrec,$ciu,$tel,$id,$nombrep){
        
        $this->id_proveedor = $idp;
        $this->nombre_contacto = $nombrec;
        $this->ciudad = $ciu;
        $this->telefono_contacto = $tel;
        $this->email = $id;
        $this->nombre_proveedor = $nombrep;
    }
   
    public function obtenerIdproveedor() {
        return $this->id_proveedor;
    }
    public function obtenerNombrecontacto() {
        return $this->nombre_contacto;
    }
    public function obtenerCiudad() {
        return $this->ciudad;
    }
    public function obtenerTelefonocontacto() {
        return $this->telefono_contacto;
    }
    public function obtenerEmail() {
        return $this->email;
    }
    public function obtenerNombreproveedor() {
        return $this->nombre_proveedor;
    }
}