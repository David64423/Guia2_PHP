<?php
    $password= $_POST['password'];
    $email = $_POST['email'];
    require "../ABM/conexion.php";
    $sql= "select * from usuarios where usu_email='$email' and usu_contrasena='$password';";
    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)>0){
        echo "La consulta se hizo bien";
    }
    else{
        echo "ALGO FALLO EN LA CONSULTA SQL";
    }
?>