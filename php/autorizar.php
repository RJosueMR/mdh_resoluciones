<?php

session_start();

if ($_SESSION["autorizacion"] != "1") {
    
    header('location: ../index.html');
    exit();

}

?>