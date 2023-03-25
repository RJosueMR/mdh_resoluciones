<?php

session_start();

include("conexion.php");

$usuario = $_POST["txtusuario"];
$contraseña = $_POST["password"];

$sql = "select * from usuario where CodigoUsu = '$usuario' and PasswordUsu = '$contraseña'";

$fila = mysql_query($sql, $cn);
$r = mysql_fetch_array($fila);

$codigo = $r["CodigoUsu"];

if ($codigo == null) {
    header('location: ../index.html');
} else {
    $_SESSION["usuario"] = $codigo;
    header('location: ../principal.html');
}

?>