<?php
include("conexion.php");

$_nombre = $_POST['txt_tipoResolucion'];
$sql="select * from tiporesolucion";

//Evaluamos si ya existe el nombre tipo de resolucion
while($r=mysql_query($sql,$cn))
{

    if($r['NombreTipoRes']==$_nombre){

        header("location: ../tiporesolucion.php");
        break;
    }

}

    $sql = "insert into tiporesolucion(NombreTipoRes) values('$_nombre')";
    mysql_query($sql, $cn);
    mysql_close($cn);
    header('location: ../tiporesolucion.php');
?>