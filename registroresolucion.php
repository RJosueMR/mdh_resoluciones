<?php
include("php/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Resolucion</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/cabecera.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/registros.css'>
</head>
<body>
    <?php 
    include("cabecera.php");
    ?>
    <div class="contenedor contenedor-res">
        <form action="php/p_registroresolucion.php" method="post" enctype="multipart/form-data">
            <div>
                <div class="Premisa1">Numero de Resolución:</div>
                <div><input type="text" name="txt_NumRes" class="caja caja-pequeña" required> - <?php echo date("Y"); ?> - MDH</div>
            </div>
            <div>
                <div class="Premisa2">Contenido:</div>
                <div><textarea name="txt_ContRes" id="" cols="30" rows="10" required></textarea></div>
            </div>
            <div>
                <div class="Premisa3">Fecha Publicación:</div>
                <div><input type="date" name="txt_FechPub" required></div>
            </div>
            <div>
                <div class="Premisa4">Tipo Resolucion:</div>
                <div><select name="lst_TipoRes" id="" required>
                    <?php
                    $sql = "select * from tiporesolucion";
                    $fila = mysql_query($sql,$cn);
                    while($r=mysql_fetch_array($fila)){
                    ?>
                    <option value="<?php echo $r['IdTipoRes'];?>"><?php echo utf8_encode($r['NombreTipoRes']);?></option>
                    <?php
                    }
                    ?>
                </select></div>
            </div>
            <div>
                <div class="Premisa5">Subir resolución:</div>
                <div><input type="file" name="archivo" required></div>
            </div>
            <br>
            <div><input type="submit" value="Agregar"></div>
        </form>
    </div>
</body>
</html>