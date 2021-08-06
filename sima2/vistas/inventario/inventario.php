<?php
    session_start();
    if(!isset($_SESSSION['id'])){
        header("location:../../index.php");
    }
    include("../../templates/menusup.php");
    include("../../templates/menulateral.php");
    include("../inventario/formularioproducto.php");
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.I.M.A</title>
</head>
<body>

    <div class="row" id="lista">
    
    
    </div>
</body>