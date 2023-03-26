<?php
include('php/p_verificarsesion.php');
?>
<!DOCTYPE html>
<html>
<head></head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Iniciar Sesión</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="Login-Page">
        <fieldset class="Img">
            <img src="img/Muni-Hualmay.png" class="Portada">
        </fieldset>
        <fieldset class="form">
            <form action="php/p_login.php" method="post" class="Login-Form">
                <label for="usuario">Usuario:</label>
                <br>
                <br>
                <input type="text" name="txtusuario" placeholder="Nombre de Usuario" id="usuario">
                <br>
                <br>
                <label for="password">Password:</label>
                <br>
                <br>
                <input type="text" name="txtpassword" placeholder="Contraseña" id="password">
                <br>
                <br>
                <input type="submit" value="Iniciar Sesión">
                <p class="message">¿Olvidaste Tu contraseña?<a href="#"><br>Recuperar Contraseña</a></p>
                <br>
                <br>
            </form>
        </fieldset>
    </div>
</body>
</html>