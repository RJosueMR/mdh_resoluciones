<?php

include("php/conexion.php");
include('php/funciones.php');
VerificarSesion();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Reporte</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/cabecera.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/reporte.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/botones.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <?php
    include('cabecera.php');
    $sql = "select r.*, tr.*, e.* from resolucion r, tiporesolucion tr, estado e group by r.NumeroRes order by r.NumeroRes desc";
    $fila = mysql_query($sql, $cn);
    ?>

    <div class="contenedor-tabla">
        <table class="tabla-reporte">
            <tr class="fila">            
                <th>Número de Resolución</th>
                <th>Tipo de Resolución</th>
                <th>Contenido</th>
                <th>Fecha de Publicación</th>
                <?php
                if ($_SESSION["tipousuario"] == "ADMINISTRADOR") {
                ?>
                <th>Estado</th>
                <?php
                }
                ?>                
                <th colspan="3">Opciones</th> <!-- Debe contener 3 --->
            </tr>
            <?php
            while ($r = mysql_fetch_array($fila)) {                
            ?>
            <tr class="fila">
                <td><?php echo utf8_encode($r["NombreTipoRes"]); ?></td>
                <td><?php echo $r["NumeroRes"]; ?></td>
                <td><?php echo utf8_encode($r["ContenidoRes"]); ?></td>
                <td><?php echo $r["FechaPublicRes"]; ?></td>
                <?php
                if($_SESSION["tipousuario"] == "ADMINISTRADOR"){
                ?>
                <td><?php echo $r["NombreEstado"]; ?></td>
                <?php
                }
                ?>
                <td><a href="#"><img src="img/pdf-icon.png" alt="descargar_resolución"></a></td>                
                <td>
                    <div>Editar</div>
                </td>
                <?php
                if ($_SESSION["tipousuario"] == "ADMINISTRADOR") {
                ?>
                <td>
                    <div class="boton">Eliminar</div>
                </td>
                <?php
                }
                ?>
            </tr>
            <?php
            }
            ?>
            
        </table>
    </div>

</body>
</html>