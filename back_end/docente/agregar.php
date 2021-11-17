<?php

include '../config/conn.php';



    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $correo = $_POST['correo'];
    $sexo=$_POST["sexo"];
    $nace=$_POST["fecha"];

   //echo $nombre.$dni.$apellido.$sexo.$correo.$nace;
    $query = "select nueva_persona('$dni','$nombre','$apellido','$correo','$sexo','$nace')";
    $query_run = pg_exec($con, $query)or die('error:'.pg_last_error());
   $filas=pg_num_rows($query_run);
   if($filas>0)
   header("location:index.php?mensaje='datos guardados correctamente'");
   else {
    header("location:index.php?mensaje='Algo Salió mal'");
   }



?>