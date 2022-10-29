<?php
session_start();
require "../proteccion.php";
proteger(3);
?>
<?php
$fecha = $_GET['fecha'];
echo $fecha;
$mes=substr($fecha, 5,2);
$dia =substr($fecha, 8,2);
echo "<br> <br> El dia que introdujo es ",$dia," y el mes fue ",$mes;

if(($mes<3) or ($mes==12 and $dia>21) or ($mes==3 and $dia<20)){
    echo "<br> <br> Ústed introdujo una fecha perteneciente a la estación del verano";
}
else if(($mes>3 and $mes<6) or ($mes==3 and $dia>21) or ($mes==6 and $dia<20)){
    echo "<br> <br> Ústed introdujo una fecha perteneciente a la estación del Otoño";
}
else if(($mes>6 and $mes<9) or ($mes==6 and $dia>21) or ($mes==9 and $dia<20)){
    echo "<br> <br> Ústed introdujo una fecha perteneciente a la estación del Invierno";
}

else{
    echo "<br> <br> Ústed introdujo una fecha perteneciente a la estación del primavera";
} 

?>