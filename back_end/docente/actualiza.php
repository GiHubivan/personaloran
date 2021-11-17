<?php
session_start();
include '../config/conn.php';


    $id=$_POST["id"];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $correo = $_POST['correo'];
    $sexo=$_POST["sexo"];
    $nace=$_POST["fecha"];

  // echo $nombre.$dni.$apellido.$sexo.$correo.$nace;
    $query = "select actualiza_persona('$id','$nombre','$apellido','$dni','$correo','$sexo','$nace')";
    $query_run = pg_exec($con, $query)or die('error:'.pg_last_error());
   $filas=pg_num_rows($query_run);
   if($filas>0)
    $_SESSION["mensaje"]="Se actualizo bien";

   else {
    $_SESSION["mensaje"]="Se actualizo bien";   }

   header("location:index.php");

?>