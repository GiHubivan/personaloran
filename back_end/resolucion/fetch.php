<?php 
include '../config/conn.php';
$sql = "select * from resolucion inner join gobierno on origen=id";
$query=pg_exec($con, $sql) or die(pg_last_error());
$totalData = pg_num_rows($query);
$result_array = [];
for($i=0;$i<$totalData;$i++){
    $row=pg_fetch_array($query);
    $row["botones"]=' <a href="#" class="badge btn-info viewbtn">VIEW</a>
    <a href="modificar.php?id='.$row["id_res"].'&&numero='.$row["numero"].'&&fecha='.$row["fecha"].'&&origen='.$row["nombre"].'&&url='.$row["url"].'" class="badge btn-primary edit_btn">EDIT</a>';
    $row["enlace"]='<a href='.$row["url"].'>'.$row["url"].'</a>';
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

 

 

 
