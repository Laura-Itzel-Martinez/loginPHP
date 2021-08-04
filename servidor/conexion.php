<?php

function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "loginsistemas";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db);

    return $conexion;
}