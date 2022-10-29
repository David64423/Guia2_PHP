<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/mostrar.css">
</head>
<body>
    
    <?php
        $id=$_GET['id'];
        require "conexion.php";


        $sql="select * from productos where prod_id=$id;";
        
        $resulset = mysqli_query($conn,$sql);

        //if(mysqli_affected_rows($conn)>0){

        while($registro = mysqli_fetch_assoc($resulset)){
            ?>
            <br> <br> <br> <br>
                <div class="container">
                    <form>
                    <p>ID:<?php echo $registro['prod_id']?></p>
                    <p class="inputID">ID:<input type="number" value="<?php echo $registro['prod_id']?>" name="id"></p>
                    <p>Descripcion:<input name="descripcion" value="<?php echo $registro['prod_descripcion']?>" type="text"></p>
                    <p>Precio:<input name="precio" value="<?php echo $registro['prod_precio']?>" type="text"></p>
                    <input type="submit" value="Modificar Los Datos" formaction="confirmacionModificar.php" formmethod="GET">
                    </form>
                    
                </div>
            <?php
        }
       /* }
        else if(mysqli_affected_rows($conn)<=0){
            echo "<br> <br> NO SE ENCONTRARON PRODUCTOS";
        }*/
        
    ?>

</body>
</html>