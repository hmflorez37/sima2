<?php
    $server ='127.0.0.1' ;
    $username = 'root';
    $password='';
    $database='sima';

    try{
        $conn=mysqli_connect($server,$username,$password,$database);

    } 
    catch (PDOException $e){
        die('connected failed: '.$e->getMessage());
    }
    
?>