<?php
include("conexion.php");

$_NumRes = $_POST['txt_NumRes'];
$_ContRes = $_POST['txt_ContRes'];
$_FechPub = $_POST['txt_FechPub'];
$_IdTipoRes = $_POST['lst_TipoRes'];

$_NumRes= $_NumRes ."-".date("Y") ."-MDH";
$sql = "insert into resolucion(NumeroRes, ContenidoRes, FechaPublicRes, IdTipoRes)  
            values('$_NumRes', '$_ContRes', '$_FechPub', $_IdTipoRes)";
mysql_query($sql,$cn);
mysql_close($cn);
header('location: ../registroresolucion.php');

?>