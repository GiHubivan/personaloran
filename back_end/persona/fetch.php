<?php 
include '../config/conn.php';
$sql = "SELECT id_persona,nombre,apellido,dni,correo,nace,sexo  FROM persona where estado='visible'";
$query=pg_exec($con, $sql) or die(pg_last_error());
$totalData = pg_num_rows($query);
$result_array = [];
for($i=0;$i<$totalData;$i++){
    $row=pg_fetch_array($query);
    switch ($row['sexo']) {
        case 'm':
            # code...
            $row['sexo']='MASCULINO';
            break;
        case 'f':
            $row['sexo']='FEMENINO';
            break;
        case 'l': $row['sexo']='LGBTQ+';    
        default:
            # code...
            break;
    }
    $row["botones"]=' <a href="#" class="badge btn-info viewbtn">VIEW</a>
    <a href="#" class="badge btn-primary edit_btn">EDIT</a>
    <a Onclick="elimina_persona('.$row['id_persona'].')" class="badge btn-danger">Delete</a>
';
    array_push($result_array,$row);
}
if($totalData>0){
    header('Content-type: application/json');
    echo '{"data":';
    echo json_encode($result_array);
    echo '}';
}
else
{
    echo $return = "<h4>No Record Found</h4>";
}
?>

 

 

 
