<?php

    include("../../templates/menulateral.php");
    include("../../templates/menusup.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMA</title>
    <script src="../../JS/grafico.js"></script>
    <script src="../../JS/chart.min.js"></script>
    <script src="../../JS/chart.esm.min.js"></script>
    <script>cargarGraficos();</script>

</head>
<body>
    <!--contenido-->
<div class="container-fluid d-flex justify-content-start" id="contenido" >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="card">
    <div class="card-header">
        <h6>PRODUCTOS STOCK BAJO</h6>
    </div>
    <div class="card-body">
    <div class="row">
        <div class="col-lg-12 ">
            <canvas id="myChart" width="400" height="300"></canvas>
        </div>
        
        
    </div>
    <button></button>
    </div>
</div>
            </div>
            <div class="col-md-6">
                <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <canvas id="myChart2" width="200" height="200"></canvas>
            </div>
            
            
        </div>
        <button></button>
        </div>
    </div>
                </div>
        </div>
    </div>
    <hr>
</div>
        </div>
    </div>

</div>
</div>
</body>
</html>
<script>
    
    </script>