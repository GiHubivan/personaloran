<?php
include '../config/conn.php';
$id=$_GET['id'];
$query="CALL eliminar_persona('$id')";
$result=pg_exec($con,$query) or die('error:'.pg_last_error());
$row=pg_fetch_array($result);
$filas=pg_num_rows($result);

//echo $filas;

header('location:../persona/index2.php');

?>