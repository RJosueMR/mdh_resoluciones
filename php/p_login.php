<?php

session_start();

include("conexion.php");

$usuario = $_POST["txtusuario"];
$contraseña = $_POST["password"];

$sql = "select u.*, tu.* from usuario u, tipousuario tu where u.CodigoUsu = '$usuario' and u.PasswordUsu = '$contraseña' and u.IdTipoUsu = tu.IdTipoUsu";

$fila = mysql_query($sql, $cn);
$r = mysql_fetch_array($fila);

$codigo = $r["CodigoUsu"];

if ($codigo == null) {

    header('location: ../index.html');

} else {

    $_SESSION["usuario"] = $codigo;
    $_SESSION["tipousuario"] = $r["NombreTipoUsu"];
    $_SESSION["autorizacion"] = 1;

    header('location: ../principal.html');
}

?>