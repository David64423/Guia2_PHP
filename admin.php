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
    <h1>Pagina de Administrador</h1>
    <div class=admin>
    <ul>
        <li>
            <a href=altas.php><button>Ingresar Productos</button></a>
        </li>   
        <li>    
            <form>
            <!-- generar la busqueda dependiendo de la opcion ingresada
            por el usuario, puede ser en la misma pag o en otra-->
            <input type=text name="buscado" required>
     
            <input type=radio name=op value="id" required>ID
            <input type=radio name=op value="descripcion" required>Descripcion
      
            <input type=submit value=Buscar formaction="ABM/buscar.php"
            formmethod="GET">

            </form>
         </li>
        <li>
            <a href=mostrar.php><button>Mostrar Productos</button></a>
        </li>
    </ul>
</div>
</body>
</html>