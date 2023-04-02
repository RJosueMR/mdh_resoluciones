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
            <div class="Grid">
                <div class="Contenedor1">
                    <div class="Premisa1">Numero de Resolución:</div>
                    <div class="Campo1"><input type="text" name="txt_NumRes" class="caja caja-pequeña" required> - <?php echo date("Y"); ?> - MDH</div>
                </div>
                <div class="Contenedor2">
                    <div class="Premisa2">Contenido:</div>
                    <div class="Campo2"><textarea name="txt_ContRes" id="" class="caja caja-mediana" cols="30" rows="10" required></textarea></div>
                </div>
                <div class="Contenedor3">
                    <div class="Premisa3">Fecha Publicación:</div>
                    <div class="Campo3"><input type="date" name="txt_FechPub" class="caja caja-mediana" required></div>
                </div>
                <div class="Contenedor4">
                    <div class="Premisa4">Tipo Resolucion:</div>
                    <div class="Contenedor4"><select name="lst_TipoRes" class="caja caja-mediana" required>
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
                <div class="Contenedor5">
                    <div class="Premisa5">Subir resolución:</div>
                    <div class="Campo5"><input type="file" name="archivo" required></div>
                </div>
                <br>
                <div class="Boton"><input type="submit" value="Agregar"></div>
            </div>
        </form>
    </div>
</body>
</html>