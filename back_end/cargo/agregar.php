<?php

include '../config/conn.php';



    $numero = $_POST['numero'];
    $fecha = $_POST['fecha'];
    $origen = $_POST['origen'];
    $url = $_POST['url'];
    
   //echo $nombre.$dni.$apellido.$sexo.$correo.$nace;
    $query = "select nueva_resolucion('$numero','$fecha','$origen','$url')";
    $query_run = pg_exec($con, $query)or die('error:'.pg_last_error());
   $filas=pg_num_rows($query_run);
   if($filas>0)
   header("location:index.php?mensaje='datos guardados correctamente'");
   else {
    header("location:index.php?mensaje='Algo Salió mal'");
   }



?>