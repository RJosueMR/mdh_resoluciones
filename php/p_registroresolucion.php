<?php

include("conexion.php");

$_NumRes = $_POST['txt_NumRes'];
$_ContRes = utf8_decode($_POST['txt_ContRes']);
$_FechPub = $_POST['txt_FechPub'];
$_IdTipoRes = $_POST['lst_TipoRes'];


$_NumRes= $_NumRes ."-".date("Y") ."-MDH";

$_ArchivoRes = $_FILES["archivo"]["tmp_name"];
$_NombreRes = $_FILES["archivo"]["name"];

List($_N,$_E) = explode(".", $_NombreRes);
if($_E == "pdf" ){

    move_uploaded_file($_ArchivoRes, "../resoluciones/".$_NumRes.".pdf");
    $sql = "insert into resolucion(NumeroRes, ContenidoRes, FechaPublicRes, IdTipoRes)  
            values('$_NumRes', '$_ContRes', '$_FechPub', $_IdTipoRes)";
    mysql_query($sql,$cn);
    mysql_close($cn);
    header('location: ../reporte.php');


}else{
    header('location:../registroresolucion.php');
}







?>