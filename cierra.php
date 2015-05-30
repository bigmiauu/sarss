<?php
//Destruimos la sesion
include "sesion.php";
session_destroy();
//Si tenemos una cookie creada la borramos
if (isset($_COOKIE['_coockie'])) {
    setCookie('_coockie', '', time() - 1000);
}
//Redireccionamos a la pagina inicial
header("Location: index.php"); 
?>