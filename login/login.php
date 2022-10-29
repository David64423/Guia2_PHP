<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div id="main">
            <div id="container">
                    <form>
                        <p>correo: <input type="email" name="email"></p>
                        <p>Contraseña:<input type="password" name="password"></p>
                        <input type="submit" value="Iniciar Sesion" formaction="verificacion.php" formmethod="POST">
                    </form>
                    <?php
                        if (isset($_GET['noEmail'])){
                            echo "No existe el correo ".$_GET['noEmail'];
                        }
                        if(isset($_GET['badPass'])){
                            echo "La contraseña no coincide con la del usuario";
                        }
                    ?>
            </div>
    </div>
</body>
</html>