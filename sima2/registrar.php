<?php
include("./PAGINAS/database.php");
?>
<?php
    $usuario=$_POST['user-name'];
    $password=sha1($_POST['password']);
    $consultar="SELECT `nom_user`, `pass_user` FROM `usuarios` WHERE nom_user='$usuario'and pass_user='$password";
    $resultado=mysqli_query($conn,$consultar);
    if(mysqli_numm_rows($resultado)>0){
        echo 1;
    }else{
        echo 0;
    }
    
            

                ?>