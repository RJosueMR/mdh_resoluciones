<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/cabecera.css'>
    <title>Document</title>
</head>
<body>
    <?php 
    include("cabecera.php");
    ?>
    <fieldset>
        <form action="../p_tiporesolucion.php" method="post">
            <table>
                <tr>
                    <td>Nombre Tipo de Resolucion</td>
                </tr>
                <tr>
                    <td><input type="text" name="txt_tipoResolucion" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Agregar"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>