<?php
//Iniciamos una sesion
    session_start();
//Revisamos si no se ha logueado un usuario y de ser asi, redireccionamos a el login con el error=2
//El error=2 es "porfavor inicie session"
    if(!isset($_SESSION["usuario"])){ 
        header("Location: log.php?error=2");
    }

?>