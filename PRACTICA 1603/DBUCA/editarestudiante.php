<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $id = $_POST["id"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $carrera = $_POST["carrera"];
        $anio = $_POST["anio"];
        $my_query = "UPDATE estudiante SET nombres = '$nombres', apellidos = '$apellidos', carrera = '$carrera', anio = '$anio'  WHERE id = $id ";
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'registry saved sucessful';
        } else { 
            echo 'error';
        }
    } else {
        echo 'unknown error';
    }

    

?>