<?php

include('php/funciones.php');
VerificarDatos();
include("php/conexion.php");
VerificarSesion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Asistente</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/cabecera.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/registros.css'>
    <script src="js/editardatos.js"></script>
</head>
<body>
    <?php 
    include("cabecera.php");
    $_CodUsuario = $_SESSION["usuario"];
    $sql = "select u.*, tu.* from usuario u, tipousuario tu where u.CodigoUsu = '$_CodUsuario'";
    $fila = mysql_query($sql, $cn);
    $r = mysql_fetch_array($fila);
    ?>
    <div class="contenedor contenedor-res">
    <div class="Grid">
        <form action="php/p_actualizardatosusuario.php" method="post" enctype="multipart/form-data">
            
            <div class="Contenedor1">
                    <div class="Premisa1">Codigo:</div>
                    <div class="Campo1"><input type="text" id="txt_codigo" name="txt_codigo" class="caja caja-mediana" value="<?php echo $r['CodigoUsu'];?>" readonly></div>
                </div>
                <div class="Contenedor2">
                    <div class="Premisa2">Nombre:</div>
                    <div class="Campo2"><input type="text" id="txt_nombre" name="txt_nombre" class="caja caja-mediana" value="<?php echo utf8_encode($r['NombreUsu']);?>" readonly></div>
                </div>
                <div class="Contenedor3">
                    <div class="Premisa3">A. Paterno:</div>
                    <div class="Campo3"><input type="text" id="txt_apaterno" name="txt_apaterno" class="caja caja-mediana" value="<?php echo utf8_encode($r['PaternoUsu']);?>" readonly></div>
                </div>
                <div class="Contenedor4">
                    <div class="Premisa4">A. Materno:</div>
                    <div class="Campo4"><input type="text" id="txt_amaterno" name="txt_amaterno" class="caja caja-mediana" value="<?php echo utf8_encode($r['MaternoUsu']);?>" readonly></div>
                </div>
                <div class="Contenedor5">
                    <div class="Premisa5">DNI:</div>
                    <div class="Contenedor5"><input type="text" id="txt_dni" name="txt_dni" class="caja caja-mediana" value="<?php echo utf8_encode($r['DNIUsu']);?>" readonly></div>
                </div>
                <div class="Boton" id="contenedor-submit"><!-- <input id="btn_enviar" type="submit" value="Guardar"> --></div>
            
        </form>
        </div>
    </div>
</body>
</html>