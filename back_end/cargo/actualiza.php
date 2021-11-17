<?php
session_start();
include '../config/conn.php';
$id=$_POST["id"];
$numero = $_POST['numero'];
    $fecha = $_POST['fecha'];
    $origen = $_POST['origen'];
    $url = $_POST['url'];

   

   //echo $id.$numero.$fecha.$origen.$url;
    $query = "select actualiza_resolucion('$numero','$fecha','$origen','$url','$id')";
    $query_run = pg_exec($con, $query)or die('error:'.pg_last_error());
   $filas=pg_num_rows($query_run);
   if($filas>0)
    $_SESSION["mensaje"]="Se actualizo bien";

   else {
    $_SESSION["mensaje"]="Se actualizo bien";   }

   header("location:index.php");

?>