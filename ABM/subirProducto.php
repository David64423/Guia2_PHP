<?php
session_start();
require "../proteccion.php";
proteger(1);
?>

<?php
    $descripcion = $_GET['descripcion'];
    $precio = $_GET['precio'];

    require "conexion.php";
    $sql="insert into productos (prod_descripcion,prod_precio) values ('$descripcion',$precio);";
    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)>0){
        echo "<br> <br> <h2> Producto Cargado Con Exito </h2>";
    }
    else{
        echo "<br> <br> <h2> ERROR AL CARGAR EL PRODUCTO </h2>";
    }
?>