<?php
    $password= $_POST['password'];
    $email = $_POST['email'];
    require "../ABM/conexion.php";
    $sql="select * from usuarios where usu_email='$email';";
    $resulset=mysqli_query($conn,$sql);
    $registro=mysqli_fetch_assoc($resulset);

    if(mysqli_affected_rows($conn)>0){
            
        if($password==$registro['usu_pass']){
          //  echo "Coincide la contraseña";
          session_start();
          $_SESSION['id']= $registro['usu_id'];
          $_SESSION['nombre']= $registro['usu_nombre']." ".$registro['usu_apellido'];
          $_SESSION['email']= $registro['usu_email'];
          $_SESSION['rol'] = $registro['rol_id'];

          switch($_SESSION['rol']){
                case 1:
                    //Admin
                    header("location:../admin.php");
                    break;
                case 2:
                    //Empleado
                    header("location:../empleado.php");
                    break;
                case 3:
                    //Profesor
                    header("location:../profesor.php");
                    break;
                default:
                    //Por las dudas
                    echo "Usted puso cualquiera";
                    break;
          }
        }
        else{
            header ("location:login.php?badPass");
        }
    }
    else{
        header("location:login.php?noEmail=$email");
    }
?>