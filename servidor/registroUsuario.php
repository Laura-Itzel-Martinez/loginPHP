<?php
   
    $nombre = $_POST['nombre'];
    $apaterno = $_POST['apaterno'];
    $amaterno = $_POST['amaterno'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);

    include "conexion.php";
    $conexion = conexion();


    $sql = "INSERT INTO t_usuarios (
                                    nombre,
                                    paterno,
                                    materno,
                                    sexo,
                                    telefono,
                                    email,
                                    usuario,
                                    password) 
            VALUES ('$nombre', 
                    '$apaterno', 
                    '$amaterno', 
                    '$sexo',
                    '$telefono',
                    '$email',
                    '$usuario',
                    '$password')";

    $respuesta = mysqli_query($conexion, $sql);
    mysqli_close($conexion);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo registrar";
    }


?>