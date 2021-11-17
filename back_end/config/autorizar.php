<?php
session_start();
include 'conn.php';
$correo=$_GET["correo"];
$_SESSION["correo"]=$correo;
$foto=$_GET["foto"];
$_SESSION["foto"]=$foto;
$consulta="select * from usuarios where nombre_usuario='$correo'";
$result=pg_exec($con,$consulta);
$row=pg_fetch_array($result);
$filas=pg_numrows($result);
                


if ($filas==0){
    $correo=$_POST["correo"];

    $clave=$_POST["clave"];
    $consulta="select * from usuarios where nombre_usuario='$correo' and clave='$clave'";
    $result=pg_exec($con,$consulta);    
    $row=pg_fetch_array($result);
    $filas=pg_numrows($result);
    $_SESSION["correo"]=$row["nombre_usuario"];
};
if($filas==0){
    header("location:http://localhost/personaloran/front_end/logueo.html?id=1");

}
switch ($row["rol"]) {
    case 'administrativo':
        header("location:http://localhost/personaloran/front_end/administrativo.php");
        break;
    
    case 'docente':
        header("location:http://localhost/personaloran/front_end/docente.php");
    
        # code...
        break;
    case 'postulante':
        break;    
                        }

 
?>