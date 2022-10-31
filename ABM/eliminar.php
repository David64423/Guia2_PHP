<?php
session_start();
require "../proteccion.php";
proteger(1);
?>
<?php
    $id=$_GET['id'];
    require "conexion.php";
    $sql="delete from productos where prod_id=$id";
    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)>0){
        echo "<br> <br> <h2> Se elimino el producto correctamente </h2>";
    }
    else{
        echo "<br> <br> <h2> ERROR AL Eliminar EL PRODUCTO </h2>";
    }
?> <button><a href="../admin.php">Volver a Inicio</a></button>