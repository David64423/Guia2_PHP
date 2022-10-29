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
    <title>Administrador</title>
    <link href=estilo.css rel=stylesheet>
</head>
<body>
    <?php
        require "ABM/../usuarioYCierre.php"
    ?>
    <h1>Pagina de Empleado</h1>
    <h4>Bienvenid@ <?php echo $_SESSION['nombre'];?></h4>
    <div class=admin>   
            <form>
            <!-- generar la busqueda dependiendo de la opcion ingresada
            por el usuario, puede ser en la misma pag o en otra-->
            <input type=text name="buscado" required>
     
            <input type=radio name=op value="id" required>ID
            <input type=radio name=op value="descripcion" required>Descripcion
      
            <input type=submit value=Buscar formaction="ABM/buscarDelEmpleado.php"
            formmethod="GET">

            </form>
         </li>
        <li>
            <a href=mostrarDelEmpleado.php><button>Mostrar Todos Productos</button></a>
        </li>
    </ul>
</div>
</body>
</html>