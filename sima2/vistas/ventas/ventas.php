<?php
	
    session_start();
    if(!isset($_SESSION["venta"])) $_SESSION["venta"] = [];
    $granTotal = 0;
    include("../../modelos/databasepdo.php");
    include("../../templates/menulateral.php");
    include("../../templates/menusup.php");
    include("../../controlador/listar_clientes.php");
    include("../../controlador/lisproven.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.I.M.A</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="../../JS/select.js"></script>



</head>
<body>
<div class="container-fluid">

<h1>S.I.M.A VENTA</h1>
		<?php
			if(isset($_GET["status"])){
				if($_GET["status"] === "2"){
					?>
                    <script type="text/javascript">alertify.error('Venta Cancelada!');</script>
					<?php
				}else if($_GET["status"] === "3"){
					?>
                    <script type="text/javascript">alertify.error('Producto quitado de la lista');</script>
					<?php
				}else if($_GET["status"] === "4"){
					?>
                    <script type="text/javascript">alertify.warning('El producto que no cuenta con todas las unidades insertadas');</script>
					<?php
				}else if($_GET["status"] === "5"){
					?>
                    <script type="text/javascript">alertify.error('El producto no existe');</script>
					<?php
                    }else if($_GET["status"] === "6"){
                        ?>
                        <script type="text/javascript">alertify.error('no hay mas unidades disponible');</script>
                        <?php
				}else{
					?>
                    <script type="text/javascript">alertify.error('Algo salió mal mientras se realizaba la venta');</script>
					<?php
				}
			}
		?>
		<br>

    
<!--contenido-->
<div class="container-fuid">
    <div class="row">
    <div class="col-9">
    <form method="post" action="../../controlador/ventastablatemp.php">
			<label for="codigo">Código de producto: </label>
            
            <input class="form-control"type="hidden" name="unidad" value="1">
			<input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
            
		</form>
    </div>
    <div class="col-3">
<form action="../../controlador/ventastablatemp.php" method=GET>
        
        <div class="col-12">
            <select name="prod"class="form-select " id="productov" aria-label="Default select">
                <option>busca producto</option>

                <?php
                foreach ($prodVenta as $mostrar ) {?>
                <option name="product_select" value="<?php echo $mostrar ['id_item']?>"><?php echo $mostrar ['id_item']?><?php echo (" -- ")?><?php echo $mostrar ['nombre_prod']?><?php echo (" marca ")?><?php echo $mostrar ['id_marcas']?></option>

                <?php } ?>
            </select>
            <input class="form-control"type="num" name=cant value="1">
        </div>
        <div class="col-12">
            <input class="form-control btn btn-primary"type="submit" value="agregar"name="agregar">
        </div>
<!--fin agregar productos-->
    </form>
        </div> 
    </div>
    <div class="row">
        <div class="col-9">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>MARCA</th>
                    <th>CANTIDAD</th>
                    <th>OPCION</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php foreach($_SESSION['venta'] as $indice => $mostrar){ 
                    $granTotal += $mostrar->cantidad_prod;
					?>
				<tr>
                <td><?php echo $mostrar->id_item?></td>
            <td><?php echo $mostrar ->nombre_prod?></td>
            <td><?php echo $mostrar ->id_marcas?></td>
            <td><?php echo $mostrar ->cantidad_prod?></td>
            <td><a class="btn btn-danger" href="<?php echo "../../controlador/eliminarprod.php?indice=" . $indice?>"></a></td>

                </tr>
                
                <?php
                }
                ?>
                
            </tbody>
        </table>
        </div>
        <div class="col-3">
        
<!--controlador terminar ventas-->
            
        <div class="">
        
        <form action="../../controlador/terminarVenta.php" method="post">
        <div class="col-12">
            
            <div class="col-12" id="clienteventa">
        <select name="clientev"class="form-select "id="clientev" aria-label="Default select"onchange="ShowSelected();">
                        <option selected>seleccionar cliente</option>

                        <?php foreach ($listaclientes as $mostrar ) {?>
                        <option name="cliente" value="<?php echo $mostrar ['id_cliente']?>"><?php echo $mostrar ['nombre']?><?php echo ("  ")?><?php echo $mostrar ['apellido']?><?php echo (" cedula ")?><?php echo $mostrar ['id_cliente']?></option>

                        <?php } ?>
                    </select>
            </div>
        </div>

            <h3>Total: <?php echo $granTotal; ?></h3>
			<input name="total" type="hidden" value="<?php echo $granTotal;?>">
			<button type="submit" class="btn btn-success">Terminar venta</button>
			<a href="../../controlador/cancelarVenta.php" class="btn btn-danger">Cancelar venta</a>
		</form>
</div>
            
    </div>
        </div>
    </div>
</div>
<!--fin de contenido-->
</div>
<!--scrript de clientes y mantenimientos--> 

    <script type="text/javascript">

</script>
</body>