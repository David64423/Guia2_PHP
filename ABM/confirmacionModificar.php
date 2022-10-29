<?php
session_start();
require "../proteccion.php";
proteger(1);
?>
<?php
    $id=$_GET['id'];
    $descripcion= $_GET['descripcion'];
    $precio= $_GET['precio'];

    echo "NUEVOS DATOS: <br> ID: ".$id."<br> descripcion: ". $descripcion."<br> precio: ".$precio;

    require "conexion.php";
    $sql="update productos set prod_descripcion='$descripcion', prod_precio=$precio where prod_id=$id;";
    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)>0){
        echo "<br> <br> <h2> Se modifico el producto correctamente </h2>";
    }
    else{
        echo "<br> <br> <h2> ERROR AL MODIFICAR EL PRODUCTO </h2>";
    }
?>