<?php
include("Connections/datos_.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="CSS/estilos2.css">
    <link rel="stylesheet" href="CSS/buscador.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <script src="JS/jquery-3.6.1.min.js"></script>
    <script src="JS/jquery.dataTables.min.js"></script>
</head>

<body>
<?php
if(!isset($_SESSION['username'])){
    include_once("encabezado_.php");
}else{
    include_once("encabezadolog_.php");
}
?>


    <!--<header class="header">
        <a href="https://cecyt3.ipn.mx" class="logo">
            <img src="imagenes/cecyt3.png" alt="logo de la empresa">
            <h2 class="nombre-empresa">CECyT 3</h2>
        </a>
        <nav>
            <a href="" class="nav link"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;</a>
            <a href="login.php" class="nav link">&nbsp;Iniciar Sesión&nbsp;</a>
            <a href="contacto.html" class="nav link">&nbsp;Contacto</a>
        </nav>
    </header>-->
    <br />
    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <a href="mecanica/mecanica.php">
                    <img src="imagenes/mecanica.jpg" alt="" class="slider__img">
                </a>
            </div>
            <div class="slider__section">
                <a href="calor/calor.php">
                    <img src="imagenes/calorls.jpg" alt="" class="slider__img">
                </a>
            </div>
            <div class="slider__section">
                <a href="electromagnetismo/electromagnetismo.php">
                    <img src="imagenes/electrom.jpg" alt="" class="slider__img">
                </a>
            </div>
            <div class="slider__section">
                <a href="moderna/fisica-moderna.php">
                    <img src="imagenes/fmoderna.jpg" alt="" class="slider__img">
                </a>
            </div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60</div>
    </div>
    <script src="JS/slider.js"></script>
    <br>
    <br>
    <br>
    <br>
    <div class="muestra1">
        Conceptos y aplicaciones de Física
        <div>Mecánica
            Calor, Luz y Sonido
            Electricidad y Magnetismo
            Física Moderna
        </div>
    </div>
    <div>
        Resuelve ejercicios y compara resultados
    </div>
    <div>
        Comparte con la comunidad
    </div>
    <div>
        Temas comunes
    </div>


    <?php
    include("piedp.php");
    ?>
    <script src="JS/buscador.js"></script>
</body>

</html>