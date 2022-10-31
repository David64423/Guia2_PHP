<?php
session_start();
require "proteccion.php";
proteger(3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bienvenida profesora</h2>
    <a href="punto1.php"><button>Ejercicio 1</button></a>
    <a href="punto2/formulario.php"><button>Ejercicio 2</button></a>
    <a href="punto3/form_punto3.php"><button>Ejercicio 3</button></a>

    <button><a href="login/loggout.php">Cerrar Sesion</a></button>
</body>
</html>