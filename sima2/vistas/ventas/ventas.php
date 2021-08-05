<?php
	
    
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
<script src="../../JS/selectcliven.js"></script>
<script src="../../JS/selectprodventa.js"></script>



</head>
<body>
<div class="container-fluid">


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
<div class="col-12">
    <div class="row">
    
    <div class="col-6">
    <div class="row">
        <div class="col-2">
            <h3 >S.G.A VENTA</h3>
        </div>
        <div class="col-10">
            
    <form method="post" action="puente.php">
			<label for="codigo">Código de producto: </label>
            
            <input class="form-control"type="hidden" name="unidad" value="1">
			<input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
            
		</form>
        </div>
    </div>
    
    </div>
    <div class="col-6">
<form action="puente.php" method=GET>
        <div class=row>
        <div class="col-6">
            <h5>buscar producto</h5>
            <select name="prod"class="form-select " id="productov" aria-label="Default select">
                <option></option>
            </select>
        </div>
        <div class="col-3">
            <h5>cantidad</h5>
            <input class="form-control"type="num" name=cant value="1">
        </div>
        <div class="col-3">
            <input class="form-control btn btn-info"type="submit" value="agregar"name="agregar">
        </div>
        </div>
<!--fin agregar productos-->
    </form>
        </div> 
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
            <td><a class="btn btn-danger" href="<?php echo "puente.php?indice=" . $indice?>"></a></td>

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
        
        <form action="../../modelos/terminarVenta.php" method="post">
        <div class="col-12">
            
            <div class="col-12" id="clienteventa">
                <h5> seleccionar cliente</h5>
        <select name="clientev"class="form-select "id="clientev" aria-label="Default select">
                        <option></option>

                    </select>
            </div>
        </div>

            <h3>Total: <?php echo $granTotal; ?></h3>
			<input name="total" type="hidden" value="<?php echo $granTotal;?>">
			<button type="submit" class="btn btn-warning">Terminar venta</button>
			<a href="../../controlador/cancelarVenta.php" class="btn btn-danger">Cancelar venta</a>
		</form>
</div>
            
    </div>
        </div>
    </div>
</div>
<!--fin de contenido-->
</div>
</body>