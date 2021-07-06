<?php
    include("../modelos/databasepdo.php");
    $cliente=(isset($_GET['cliente']))?$_GET['cliente'] :"";
    $cliente=(isset($_GET['mantov']))?$_GET['mantov'] :"";
    $producto=(isset($_GET['prod']))?$_GET['prod'] :$_POST["codigo"];
    $cant=(isset($_GET['cant']))?$_GET['cant'] :$_POST['unidad'];

    $sentencia=$pdo->prepare("SELECT * FROM `producto` WHERE id_item = $producto ");
    $sentencia->execute();
    $prodlistado=$sentencia->fetch(PDO::FETCH_OBJ);
    # Si no hay existencia...
    if ($prodlistado->cantidad_prod < 1) {

        header("Location: ../vistas/ventas/ventas.php?status=5");
        exit;
        
    }
    if ($cant > $prodlistado->cantidad_prod) {
        header("Location: ../vistas/ventas/ventas.php?status=4");
        exit;
    }
    session_start();
    # Buscar producto dentro del la venta
    $indice = false;
    for ($i = 0; $i < count($_SESSION["venta"]); $i++) {
        if ($_SESSION["venta"][$i]->id_item === $producto) {
            $indice = $i;
            break;
        }
    }
    # Si no existe, lo agregamos como nuevo
    if ($indice === false) {
        $prodlistado->cantidad_prod = $cant;
        array_push($_SESSION["venta"], $prodlistado);
    } else {
        # Si ya existe, se agrega la cantidad
        # Pero espera, tal vez ya no haya
        $cantidadExistente = $_SESSION["venta"][$indice]->cantidad_prod;
        # si al sumarle uno supera lo que existe, no se agrega
        if ($cantidadExistente > $prodlistado->cantidad_prod) {
            header("Location: ../vistas/ventas/ventas.php?status=6");
            exit;
        }
        $_SESSION["venta"][$indice]->cantidad_prod++;
            }

    header("Location: ../vistas/ventas/ventas.php");

    