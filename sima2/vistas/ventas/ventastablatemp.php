<?php
    include("../../modelos/databasepdo.php");
    
    $cliente=(isset($_GET['cliente']))?$_GET['cliente'] :"";
    $producto=(isset($_GET['prod']))?$_GET['prod'] :"";
    $cant=(isset($_GET['cant']))?$_GET['cant'] :"";
    $sentencia=$pdo->prepare("SELECT * FROM `producto` WHERE id_item = $producto ");
    $sentencia->execute();
    $prodlistado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    if($prodlistado){
        foreach($prodlistado as $mostrar) {
            echo $idprod=$mostrar['id_item'];
            echo $noprod=$mostrar['nombre_prod'];
            echo $marcprod=$mostrar['id_marcas'];
            echo $cant;}
            $id=(isset($idprod))?$idprod :"";
    $nombre=(isset( $noprod))? $noprod :"";
    $marca=(isset($marcprod))?$marcprod :"";
    $cant=(isset($_GET['cant']))?$_GET['cant'] :"";

    $sentencia=$pdo->prepare("INSERT INTO temp (`id_item`, `nombre_prod`, `id_marcas`, `cantidad_prod`) VALUES(:Id,:Nombre,:Marca,:Cantidad)");
    $sentencia->bindParam(':Id',$id);
    $sentencia->bindParam(':Nombre',$nombre);
    $sentencia->bindParam(':Marca',$marca);
    $sentencia->bindParam(':Cantidad',$cant);
    $sentencia->execute();
    

    header("location:../ventas/ventas.php");
        
    }
    
    

            


?>

