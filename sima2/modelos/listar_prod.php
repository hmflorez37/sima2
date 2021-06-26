<?php
function listarprod(){
    include("../../modelos/database.php");
    $consulta="SELECT * from producto";
    $resultado=mysqli_query($conn,$consulta);
    while($mostrar=mysqli_fetch_array($resultado)){
    ?>
    
        <tr>
            <td><?php echo $mostrar ['id_item']?></td>
            <td><?php echo $mostrar ['nombre_prod']?></td>
            <td><?php echo $mostrar ['id_marcas']?></td>
            <td><?php echo $mostrar ['fecha_vencimiento']?></td>
            <td><?php echo $mostrar ['cantidad_prod']?></td>
        </tr>
    <?php
    }
}
?>