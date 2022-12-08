<?php
include("Connections/cnx.php");

if(isset($_POST["Registrate"])){
    if($_POST['nombre']==""||$_POST['correo']==""||$_POST['contra']==""){
        echo "<script>alert('Debes ingresar todos los datos!');
        window.location='registro.php'</script>";
    }else{
        $nombre = mysqli_real_escape_string($cnx,$_POST['nombre']);
        $correo = mysqli_real_escape_string($cnx,$_POST['correo']);
        $password = mysqli_real_escape_string($cnx,$_POST['contra']);
        $password_encriptada = sha1($password);
        $sqluser= "SELECT id From us WHERE correo = '$correo'";
        $resultadouser = $cnx->query($sqluser);
        $filas = $resultadouser -> num_rows;
        if($filas>0){
            echo "<script> alert('El usuario ya existe');
                    window.location = 'registro.php';
                    </script>";
        }else{
            $sqlusuario = "INSERT INTO us (nombre, contrasena, correo) 
            VALUES ('$nombre','$password_encriptada','$correo')";
            $resultadousuario = $cnx -> query($sqlusuario);
            if($resultadousuario>0){
                echo "<script> alert('Registro Exitoso');
                    window.location = 'login.php';
                    </script>";
            }else{  
                echo "<script> alert('Error al registrarse');
                    window.location = 'index.php';
                    </script>";
            }
        } 
    }
}
?>