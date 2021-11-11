<?php
include '../config/conn.php';
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['mail'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

//echo $nombre.'g'.$telefono.$correo.$asunto.$mensaje;
$query="Call public.nueva_bandeja('$nombre','$telefono','$correo','$asunto','$mensaje')";
//$result=pg_exec($con,$query) or die('error:'pg_last_error());
//$row=pg_fetch_array($result);
header('location:../../../otra/crud/quejas.php');

?>