<?php
    $diaIngresado= $_GET['dia'];
    $mesIngresado= $_GET['mes'];
    $anioIngresado= $_GET['anio'];
    echo "<br> <br> <br> El dia ingresado fue ", $diaIngresado;
    echo "<br> el numero de hoy es ",date('d')-1;
    $diaActual= date('d')-1;

    echo "<br> <br> <br> El mes ingresado fue ", $mesIngresado;
    echo "<br> el mes actual es ",date('m');
    $mesActual= date('m');

    echo "<br> <br> <br> El año ingresado fue ", $anioIngresado;
    echo "<br> el año actual es ",date('Y');
    $anioActual= date('Y');

    if($diaIngresado==$diaActual and $mesIngresado==$mesActual and $anioIngresado==$anioActual){
        echo "<br> <br> <br> Ingresaste correctamente la fecha de hoy";
    }

    else{
        $fechaActual = $anioActual."-".$mesActual."-".$diaActual;
        $fechaIngresada = $anioIngresado."-".$mesIngresado."-".$diaIngresado;
        $date1 = new DateTime($fechaActual);
        $date2 = new DateTime($fechaIngresada);

        $diff = $date1->diff($date2);
        // will output 2 days

        if($date1>$date2){
            echo "<br> <br> <br> <br> la fecha actual es mas grande que la que ingresaste";
            echo "<br> le faltan ".$diff->days . ' dias a la fecha ingresada para alcanzar a la actual ';
        }

        if($date1<$date2){
            echo "<br> <br><br><br> la fecha actual es menor que la que ingresaste";
            echo "<br> te pasaste por ".$diff->days . 'dias de la fecha actual';
        }
        ?>
        <p>Por favor Ingresar nuevamente una fecha...<a href="form_punto3.html">Volver a la página para ingresar fecha</a></p>  
        <?php
    }
?>