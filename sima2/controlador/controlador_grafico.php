<?php
    require "../modelos/grafico.php";
    $MG = new modeloGrafico();
    $consulta = $MG->llamardatos();
    echo json_encode($consulta);