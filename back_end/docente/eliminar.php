<?php
session_start();
include '../config/conn.php';
$id=$_GET['id'];
$query="CALL eliminar_persona('$id')";
$result=pg_exec($con,$query) or die('error:'.pg_last_error());
$row=pg_fetch_array($result);
$filas=pg_num_rows($result);

if($filas>0)
$_SESSION["mensaje"]='se borraron los datos';
else 
$_SESSION["mensaje"]='algo salió mal';
header('location:../persona/index.php');

?>