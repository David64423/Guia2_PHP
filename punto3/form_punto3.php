<?php
session_start();
require "../proteccion.php";
proteger(3);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form>
        <p>Ingresar Dia  <input min=1 max=31 type="number" name="dia" required></p>
        <p>Ingresar Mes  <input min=1 max=12 type="number" name="mes" required></p>
        <p>Ingresar Año  <input min=1000  type="number" name="anio" required></p>
        <input type="submit" value="Enviar Datos" formaction="punto3.php" formmethod="GET">
    </form>
    <button><a href="../profesor.php">Volver a Inicio</a></button>
</body>
</html>