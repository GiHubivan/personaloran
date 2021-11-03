<?php

include 'conn.php';

if(isset($_POST['checking_add']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $sexo=$_POST["sexo"];
    $nace=$_POST["nace"];

    $query = "INSERT INTO persona (nombre,apellido,dni,correo,sexo,nace) VALUES ('$fname','$lname','$class','$section','$sexo','$nace')";
    $query_run = pg_exec($con, $query);

    if($query_run)
    {
        echo $return  = "Datos guardados correctamente";
        
    }
    else
    {
        echo $return  = "Algo salio mal.!";
    }
   
}

?>