<?php
include("conexion.php");

//Primario
$_codusu = $_POST['txt_codusu'];
$_passw = $_POST['txt_pasword'];
$_apater = $_POST['txt_paterno'];
$_amater = $_POST['txt_amaterno'];
$_nombre = $_POST['txt_nombre'];
$_dni = $_POST['txt_dni'];

//Segundario
$_direusu = $_POST['txt_direccion'];
$_celusu = $_POST['txt_cel'];
$_emailusu = $_POST['txt_email'];
$_sexousu = $_POST['txt_sexo'];
$_fechnac = $_POST['txt_fechnac'];

if($_direusu == null || $_celusu == null || $_emailusu == null || $_sexousu == null || $_fechnac == null ){
    $sql = "insert into usuario (CodigoUsu,PasswordUsu,PaternoUsu,MaternoUsu,NombreUsu,DNIUsu)
            values('$_codusu','$_passw','$_apater','$_amater','$_nombre','$_dni')";
    mysql_query($sql,$cn);
    mysql_close($cn);
    header('location: xxx');
}else{
    
}


?>