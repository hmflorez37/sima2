
<?php 
    include("../modelos/databasepdo.php");

    $id=(isset($_POST['id']))?$_POST['id'] :"";
    $nombre=(isset($_POST['nombre']))?$_POST['nombre'] :"";
    $marca=(isset($_POST['marca']))?$_POST['marca'] :"";
    $fechaven=(isset($_POST['fechaven']))?$_POST['fechaven'] :"";
    $cantidad=(isset($_POST['cantidad']))?$_POST['cantidad'] :"";
    
    $accion=(isset($_POST['accion']))?$_POST['accion'] :"";


    switch($accion){
        case"btnagregar":
            $sentencia=$pdo->prepare("INSERT INTO producto (`id_item`, `nombre_prod`, `id_marcas`, `fecha_vencimiento`, `cantidad_prod`) VALUES(:Id,:Nombre,:Marca,:Fecha,:Cantidad)");
            $sentencia->bindParam(':Id',$id);
            $sentencia->bindParam(':Nombre',$nombre);
            $sentencia->bindParam(':Marca',$marca);
            $sentencia->bindParam(':Fecha',$fechaven);
            $sentencia->bindParam(':Cantidad',$cantidad);
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    if(empty($listaProductos)){
        header("location:../vistas/inventario/inventario.php?status=1");
    }else{
        header("location:../vistas/inventario/inventario.php?status=2");
    }
        break;

        case"btnmodificar":
            $sentencia=$pdo->prepare("UPDATE `producto` SET `id_item`=:Id,`nombre_prod`=:Nombre,`id_marcas`=:Marca,`fecha_vencimiento`=:Fecha,`cantidad_prod`=:Cantidad WHERE `id_item`=:Id");
            $sentencia->bindParam(':Id',$id);
            $sentencia->bindParam(':Nombre',$nombre);
            $sentencia->bindParam(':Marca',$marca);
            $sentencia->bindParam(':Fecha',$fechaven);
            $sentencia->bindParam(':Cantidad',$cantidad);
            $sentencia->execute();
            header("location:../vistas/inventario/inventario.php?status=3");
            break;
            
        
    }