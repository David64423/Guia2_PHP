<?php
    session_start();
    echo "Hasta pronto ".$_SESSION['nombre'];
    session_destroy(); /*Termina con todas las variables de sesion y su contenido */
    ?>

    <a href="login.php"><button>Iniciar Sesion</button></a>   
    <?php
    ?>