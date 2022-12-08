<?php
include("Connections/datos_.php");
if(isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/estilos2.css">
    <title>Iniciar Sesion</title>
</head>
<body>

    <form class="formulario" action="validar.php" method="post">
        <h1>Login</h1>
        <div class="contenedor">
            
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo Electronico" name="usuario" required><!--  -->
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="cont" required><!--  -->
            </div>
            <input type="submit" value="Login" class="button">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿No tienes cuenta? <a class="link" href="registro.php">Registrate</a></p>
            <p><a class="link" href="recuperar.php">¿Olvidaste tu contraseña?</a></p>
        </div>
    </form>
</body>
</html>