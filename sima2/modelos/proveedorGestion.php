<?php class gestorProveedor {
    private $pdo;

    public function __construct(){
        require_once ("databasepdo.php");
        $pdo=new base();
        $this->pdo=$pdo->construct();

    }

    public function listadoProveedor(){

        $consulta=(isset($_POST['buscarp']))?$_POST['buscarp']:""; // revosar con hemerson por que no se de donde se crea :/
    if(!$consulta){
        $sentencia=$this->pdo->prepare("SELECT * FROM proveedor");
        $sentencia->execute();
        $listaProveedor=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $listaProveedor; // revosar con hemerson por que no se de donde se crea :/
        
    
    }else {
        $consulta=(isset($_POST['buscarp']))?$_POST['buscarp']:""; 
        $sentencia=$this->pdo->prepare("SELECT  `id_proveedor`, `nombre_contacto`, `ciudad`, `telefono_contacto`,`email`, `nombre_prov` FROM `proveedor` where id_proveedor like '%".$consulta."%' or email like '%".$consulta."%' or nombre_contacto like '%".$consulta."%' ");
        $sentencia->execute();
        $listaProveedor=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $listaProveedor; // revosar con hemerson por que no se de donde se crea :/
        
    
        }
    
    }   //Crear controlador se olvida despues..
    public function guardarproveedor(proveedor $proveedor){  
        
        $id_proveedor = $proveedor->obtenerIdproveedor();
        $nombre_contacto = $proveedor->obtenerNombrecontacto();
        $ciudad = $proveedor->obtenerCiudad();
        $telefono_contacto = $proveedor->obtenerTelefonocontacto();
        $email = $proveedor->obtenerEmail();
        $nombre_proveedor = $proveedor->obtenerNombreproveedor();
        $sentencia=$this->pdo->prepare("INSERT INTO proveedor (`id_proveedor`, `nombre_contacto`, `ciudad`, `telefono_contacto`,`email`, `nombre_prov`) VALUES('$id_proveedor','$nombre_contacto','$ciudad','$telefono_contacto','$email','$nombre_proveedor')");
        $sentencia->execute();
        

    }
    public function editarproveedor(proveedor $proveedor){
        
        
        $id_proveedor = $proveedor->obtenerIdproveedor();
        $nombre_contacto = $proveedor->obtenerNombrecontacto();
        $ciudad = $proveedor->obtenerCiudad();
        $telefono_contacto = $proveedor->obtenerTelefonocontacto();
        $email = $proveedor->obtenerEmail();
        $nombre_proveedor = $proveedor->obtenerNombreproveedor();
        $sentencia=$this->pdo->prepare("UPDATE `proveedor` SET `nombre_contacto`='$nombre_contacto',`ciudad`='$ciudad',`telefono_contacto`='$telefono_contacto',`email`='$email',`nombre_prov`='$nombre_proveedor' WHERE `id_proveedor`='$id_proveedor'");
            $sentencia->execute();
    }
}
