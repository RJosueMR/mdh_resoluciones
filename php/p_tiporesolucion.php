<?php
include("conexion.php");

$_nombre = $_POST['txt_tiporesol'];
$sql="select * from tiporesolucion";

while($r=mysql_query($sql,$cn)){

    if($r['NombreTipoRes']==$_nombre){

        header("location: ../tiporesolucion.html");
        break;
    }

}

    $sql = "insert into tiporesolucion(NombreTipoRes) values('$_nombre')";
    mysql_query($sql, $cn);
    header('location: ../tiporesolucion.html');
    mysql_close($cn);


?>