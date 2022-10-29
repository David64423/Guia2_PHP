<?php
$servidor="localhost";
$usuarioBD="root";
$passBD="";
$nombreBD="guia2";

$conn=mysqli_connect ($servidor,$usuarioBD,$passBD) or die ("No se pudo conectar al servidor");
mysqli_select_db($conn,$nombreBD) or die("no se pudo  conectar a la base de datos");

?>