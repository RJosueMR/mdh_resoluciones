<?php

function AutorizarAdministrador()
{
    include("conexion.php");
    include("p_login.php");

    $codigo = $_SESSION["usuario"];
    $sql = "select u.*, tu.* from usuario u, tipousuario tu where u.CodigoUsu='$codigo' and u.IdTipoUsu = tu.IdTipoUsu";
    $fila = mysql_query($sql, $cn);
    $r = mysql_fetch_array($fila);

    if ($r["NombreTipoUsu"] == "ADMINISTRADOR") {
        return true;
    } else {
        return false;
    }

}



?>