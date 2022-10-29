<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta productos</title>
    <link href=estilo.css rel=stylesheet>
</head>
<body>
    <section id=altas>
        <h1>Ingreso de Productos</h1>
        <form>
            Descripcion:<br>
            <input type=text name=descripcion required><br>
            Precio:<br>
            <input type=number step=0.25 name=precio required><br>
            <input type=submit value="Ingresar Producto" formaction="ABM/subirProducto.php" formmethod="GET">
        </form>
    </section>  
</body>
</html>

<?php

//generar formulario que me permita ingresar un nuevo producto


?>