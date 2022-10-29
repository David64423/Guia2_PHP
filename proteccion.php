<?php
    function proteger($rol){
    if(isset($_SESSION['id']) and $_SESSION['rol']==$rol){

    }
    else{
        echo "ACCESO NO AUTORIZADO";
        exit();
    }
    }
?>