<!--metodo php-->

<?php
include("./database.php");

        if(isset($_POST['guardar'])){
            if(strlen($_POST['id']) && strlen($_POST['nombre'])>=1 && strlen($_POST['marca'])>=1 && strlen($_POST['fechaven'])>=1  && strlen($_POST['cantidad'])>=1){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $marca=$_POST['marca'];
                $fechaven=$_POST['fechaven'];
                $cantidad=$_POST['cantidad'];
                $consulta="INSERT INTO producto(id_item, nombre_prod, id_marcas, fecha_vencimiento, cantidad_prod) VALUES ('$id','$nombre','$marca','$fechaven','$cantidad') ";
                $resultado=mysqli_query($conn,$consulta);
                if($resultado){
                    echo "guardado";
                    return;
                }else{
                    echo "fallo de registro";
                }
                
                
            }

        }
        
    ?>