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
    <title>punto 1</title>
</head>
<body>
    
    <?php
    $diasSemana= ["sabado","Domingo","Lunes","martes","miercoles","jueves","viernes"];
    $meses=["diciembre","enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre"];
    $numeroMes= date("m")+0;
    $numeroDiaSemana= date("w")+0;
    echo "Hoy es ",$diasSemana[$numeroDiaSemana]," ",date("d")-1," de ",$meses[$numeroMes]," del ",date("Y");
    ?>

</body>
</html>

