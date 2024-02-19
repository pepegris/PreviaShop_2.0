<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
</head>

<?php
include 'includes/loading.php';



if (isset($_POST)) {

    require 'includes/conexion.php';
    session_start();

    $usuario = trim($_POST['user']);
    $password = trim($_POST['pass']);




    $sql = "SELECT * FROM usuario WHERE usuario ='$usuario'";

    $consulta = sqlsrv_query($conn, $sql);
    //esto sacara un array del usuario de la base de dato
    $cifrado = sqlsrv_fetch_array($consulta);

    if ($consulta && $cifrado['usuario'] == $usuario) {


        // comprobar la contraseña
        #$cifrado = sqlsrv_fetch_assoc($consulta); //ESTE ES PARA POST O MYSQL
        #$verifica= password_verify($password,$cifrado['clave']);
        $verifica = $cifrado['clave'];
        if ($verifica) {

            echo "estoy en el IF";
            $_SESSION['username'] = $usuario;

            if (isset($_SESSION['error_login'])) {
                //borrar la sesion porque dio error
                session_unset($_SESSION['error_login']);
            }

            header('refresh:3;url=  config/inicio.php');

        } else {
            header ("location:home.php");
        }
    } else {
        header ("location:home.php");
    }
} else {
    header ("location:home.php");
}
?>

</html>