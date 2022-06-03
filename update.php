<?php
    include ("conexion.php");
    $con = conectar();
    $codEstudiante = $_POST['codigo'];
    $cedulaEstudiante = $_POST['cedula'];
    $nombreEstudiante = $_POST['nombre'];
    $apellidoEstudiante = $_POST['apellido'];
    $sql = "UPDATE estudiante SET cedula = '$cedulaEstudiante' nombre = '$nombreEstudiante' apellido = '$apellidoEstudiante' WHERE codigo = '$codEstudiante'";
    $query = mysqli_query($con, $sql);  

        if($query){
            Header("Location: index.php");
        }else{

        }
?>