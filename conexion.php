<?php
function conectar(){
    $host = "localhost";
    $usuario = "root";
    $pass = "";
    $bd = "bd1";
    $conect = mysqli_connect($host, $usuario, $pass);
    mysqli_select_db($conect, $bd);
    return $conect;
}
?>