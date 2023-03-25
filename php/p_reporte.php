<?php

include("conexion.php");
include("p_login.php");
include("autorizar.php");

$codigo = $_SESSION["usuario"];

$sql = "select r.*, tr.*, e.* from resolucion r, tiporesolucion tr, estado e";

$fila = mysql_query($sql, $cn);

while ($r = mysql_fetch_array($fila)) {
    # Aquí va lo de la tabla
    echo $r["NombreTipoRes"];
    echo $r["NumeroRes"];
    echo $r["ContenidoRes"];
    echo $r["FechaPublicRes"];

    # Si es admin, puede ver
    $validacion = AutorizarAdministrador();
    if ($validacion) {
        echo "Cambiar estado";
    }
   
    echo $r["NombreTipoRes"];
}

?>