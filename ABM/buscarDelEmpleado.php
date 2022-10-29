<?php
session_start();
?>
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
        $op=$_GET['op'];
        $buscado=$_GET['buscado'];
        require "conexion.php";

        if($op=="descripcion"){
            echo "entro en descripcion";
            $sql="select * from productos where prod_descripcion='$buscado';";
        }
        else if($op=="id"){
            echo "entro en id";
            $sql="select * from productos where prod_id=$buscado;";
            
        }
        
        $resulset = mysqli_query($conn,$sql);

        //if(mysqli_affected_rows($conn)>0){

        while($registro = mysqli_fetch_assoc($resulset)){
            ?>
            <br> <br> <br> <br>
                <div class="container">
                    <p>ID:<?php echo $registro['prod_id']?></p>
                    <p>Descripcion:<?php echo $registro['prod_descripcion']?></p>
                    <p>Precio:<?php echo $registro['prod_precio']?></p>
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