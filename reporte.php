<?php

include("php/conexion.php");
include('php/p_verificarsesion.php');

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
    <script src='main.js'></script>
</head>
<body>
    
    <?php
    include('cabecera.php');
    $codigo = $_SESSION["usuario"];
    $sql = "select r.*, tr.*, e.* from resolucion r, tiporesolucion tr, estado e";
    $fila = mysql_query($sql, $cn);
    ?>

    <div class="contenedor-tabla">
        <table class="tabla-reporte">
            <tr class="fila">            
                <th>Número de Resolución</th>
                <th>Tipo de Resolución</th>
                <th>Contenido</th>
                <th>Fecha de Publicación</th>
                <th>Estado</th>
                <th colspan="3">Opciones</th> <!-- Debe contener 3 --->
            </tr>
            <?php
            while ($r = mysql_fetch_array($fila)) {                
            ?>
            <tr class="fila">
                <td><?php echo $r["NombreTipoRes"]; ?></td>
                <td><?php echo $r["NumeroRes"]; ?></td>
                <td><?php echo $r["ContenidoRes"]; ?></td>
                <td><?php echo $r["FechaPublicRes"]; ?></td>
                <td><?php echo $r["NombreEstado"]; ?></td>
                <td>Descargar</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php
            }
            ?>
            
        </table>
    </div>

</body>
</html>