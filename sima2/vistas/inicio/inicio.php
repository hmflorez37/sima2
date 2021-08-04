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
    <script></script>

</head>
<body>
    <!--contenido-->
<div class="container-fluid d-flex justify-content-start" id="contenido" >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="row">
                    <div class="card-body">
                        <div class="col-lg-2">
                            <button class="btn btn-secondary"onclick="cargarGraficos();">graficoBar</button>
                        </div><div class="col-lg-2">
                            <button class="btn btn-secondary"onclick="cargarGraficostorta();">graficotorta</button>
                        </div>
                        
                    </div>
                    <canvas id="graficoStock" width="400" height="340"></canvas>
                    <canvas id="graficoTorta" width="400" height="340"></canvas>
                </div>
                
</div>
            </div>
    </div>
</div>
</body>
</html>
<script>
    
    </script>