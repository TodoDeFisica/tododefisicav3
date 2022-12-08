<?php
require("Connections/cnx.php");
if(!empty($_POST)){
    session_start();
    $usuario=$_POST['usuario'];
    $password=$_POST['cont'];
    $password_encriptada=sha1($password);
    $q="SELECT COUNT(*) as contar FROM us WHERE correo='$usuario' AND contrasena='$password_encriptada'";
    $consulta = mysqli_query($cnx,$q);
    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['username']=$usuario;
        header("location: index.php");
    }else{
        echo "<script> alert('Datos Incorrectos');
                    window.location = 'login.php';
                    </script>";
    }
}
/*
$usuario=$_POST['usuario'];
$contrasena=$_POST['cont'];
session_start();
$_SESSION['usuario'] = $usuario;

include("db.php");

$consulta = "SELECT*FROM Us where correo='$usuario' and contrasena='$contrasena'";
$resultado = mysqli_query($conexion,$consulta)  or die(mysqli_error($conexion));;
$row_user = mysqli_fetch_assoc($resultado);
$idp=$row_user['id'];
//$filas = mysqli_num_rows($resultado);
$idi=$idp;
include('persona.php');
if($idp==$row_user['id']){
    header("location:index.html");
}else{
    
    
    include("login.php");
    
    echo "<h1 class='bad'>".'ERROR DE AUTENTICACIÓN'."</h1>";
    
}/*
mysqli_free_result($resultado);
mysqli_close($conexion);
*/
?>