<?php
session_start();
require "../proteccion.php";
proteger(3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_punto 2</title>
</head>
<body>
    <form>
       <p>Introducir una fecha <input type="date" name="fecha"></p> 
       <input type="submit" value="Mandar Fecha" formaction="punto2.php" formmethod="GET">
    </form>
    <button><a href="../profesor.php">Volver a Inicio</a></button>
</body>
</html>