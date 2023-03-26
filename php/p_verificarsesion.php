<?php

session_start();

if ( $_SESSION["tipousuario"] != "1") {
    
    header('location: ../index.html');
    exit();

}

?>