<?php
session_start();
//para verificar si existe una sesion
function VerificarSesion(){
    if (!isset($_SESSION["usuario"])) {
        #Se ejecuta si hay sesión
        header('location: index.php');

    }
}

//Funcion para crear contraseña
function CreatePassword(){
    $_plantilla="1234567890qwertyuiopasdfghjklzxcvbnm";
        $_pass="";
        for ($i=1; $i <=8 ; $i++) { 
            
            $_pass=$_pass.substr($_plantilla,rand(1,strlen($_plantilla)),1);
        }
        return $_pass;
}

//verificar Index
function VerificarIndex(){
    if (isset($_SESSION["usuario"])) {
    
        #Se ejecuta si hay sesión
        header('location: principal.php');
    
    }
}
?>