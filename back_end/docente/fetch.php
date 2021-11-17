<?php 
include '../config/conn.php';
$sql = "SELECT legajo,titulo,dni,cuil,revista FROM docente";
$query=pg_exec($con, $sql) or die(pg_last_error());
$totalData = pg_num_rows($query);

$result_array = [];
for($i=0;$i<$totalData;$i++){
    $row=pg_fetch_array($query);
      
   $row["botones"]=' <a href="#" class="badge btn-info viewbtn">VIEW</a>
    <a href="modificar.php?leg='.$row["legajo"].'&&dni='.$row["dni"].'&&titulo='.$row["titulo"].'&&cuil='.$row["cuil"].'&&revista='.$row["revista"].'" class="badge btn-primary edit_btn">EDIT</a>
    <a Onclick="elimina_docente('.$row["legajo"].')" class="badge btn-danger">Delete</a>';
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

 

 

 
