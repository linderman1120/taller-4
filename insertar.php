<?php
    include ("conexion.php");
    $con = conectar();
    $codEstudiante = $_POST['txtcod'];
    $cedulaEstudiante = $_POST['txtcedula'];
    $nombreEstudiante = $_POST['txtnombre'];
    $apellidoEstudiante = $_POST['txtapellido'];
    $sql = "INSERT INTO estudiante VALUES ('$codEstudiante', '$cedulaEstudiante', '$nombreEstudiante', '$apellidoEstudiante')";
    $query = mysqli_query($con, $sql);
    
        if($query){
            Header("Location: index.php");
        }else{

        }
?>