<?php

session_start();

if (isset($_SESSION["usuario"])) {
    
    #Se ejecuta si hay sesión
    header('location: principal.php');

}

?>