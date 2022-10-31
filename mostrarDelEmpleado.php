<?php
session_start();
require "proteccion.php";
proteger(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mostrar.css">
</head>
<body>
    <h1>Todos Los Productos</h1>
<?php
    require "ABM/conexion.php";
    $sql="select * from productos;";
    $resulset = mysqli_query($conn,$sql);


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
?>

<button><a href="../empleado.php">Volver a Inicio</a></button>
    
</body>
</html>
