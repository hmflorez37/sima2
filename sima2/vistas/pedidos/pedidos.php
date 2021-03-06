<?php
	
    session_start();
    
    include("../../modelos/databasepdo.php");
    include("../../templates/menulateral.php");
    include("../../templates/menusup.php");

    if(!isset($_SESSION["venta"])) $_SESSION["venta"] = [];
    $granTotal = 0;
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.I.M.A</title>
    <link href="../../CSS/select2.min.css" rel="stylesheet"/>

<script src="../../JS/select2.min.js"></script>
<script src="../../JS/select.js"></script>
<script src="../../JS/selectproveedor.js"></script>
<script src="../../JS/selectprodventa.js"></script>



</head>
<body>
<div class="container-fluid">

<h1>S.G.A PEDIDO</h1>
		<?php
			if(isset($_GET["status"])){
				if($_GET["status"] === "2"){
					?>
                    <script type="text/javascript">alertify.error('Pedido Cancelado!');</script>
					<?php
				}else if($_GET["status"] === "3"){
					?>
                    <script type="text/javascript">alertify.error('Producto quitado de la lista');</script>
					<?php
				}else if($_GET["status"] === "5"){
					?>
                    <script type="text/javascript">alertify.error('El producto no existe');</script>
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
    <form method="post" action="puente.php">
			<label for="codigo">Código de producto: </label>
            
            <input class="form-control"type="hidden" name="unidad" value="1">
			<input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
            
		</form>
    </div>
    <div class="col-3">
<form action="puente.php" method=GET>
        
        <div class="col-12">
            <h5>buscar producto</h5>
            <select name="prod"class="form-select " id="productov" aria-label="Default select">
                <option></option>
            </select>
            <h5>cantidad de unidades</h5>
            <input class="form-control"type="num" name=cant >
        </div>
        <div class="col-12">
            <input class="form-control btn btn-info"type="submit" value="agregar"name="agregar">
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
            <td><a class="btn btn-danger" href="<?php echo "eliminar_prod.php?indice=" . $indice?>"></a></td>

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
        
        <form action="../../modelos/terminarpedido.php" method="post">
        <div class="col-12">
            
            <div class="col-12" id="clienteventa">
               <h5> Seleccionar Proveedor</h5>
        <select name="proveedor"class="form-select "id="proveedor" aria-label="Default select">
                        <option>
                        </option>

                    </select>
            </div>
        </div>

            <h3>Total: <?php echo $granTotal; ?></h3>
			<input name="total" type="hidden" value="<?php echo $granTotal;?>">
			<button type="submit" class="btn btn-warning">Terminar Pedido</button>
			<a href="../../controlador/cancelarpedido.php" class="btn btn-danger">Cancelar Pedido</a>
		</form>
</div>
            
    </div>
        </div>
    </div>
</div>
<!--fin de contenido-->
</div>
</body>