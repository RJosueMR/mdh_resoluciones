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
        <form action="php/registroresolucion.php" method="post">
            <div>
                <div>Numero de Resolución</div>
                <div><input type="text" name="" class="caja caja-pequeña"> - <?php echo date("Y"); ?> - MDH</div>
            </div>
            <div>
                <div>Contenido:</div>
                <div><textarea name="" id="" cols="30" rows="10"></textarea></div>
            </div>
            <div>
                <div>Fecha Publicación:</div>
                <div><input type="date" name="" id=""></div>
            </div>

        </form>
    </div>
</body>
</html>