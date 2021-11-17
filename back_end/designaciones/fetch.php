<?php 
include '../config/conn.php';
$sql = "select * from vista_horas";
$query=pg_exec($con, $sql) or die(pg_last_error());
$totalData = pg_num_rows($query);
$result_array = [];
for($i=0;$i<$totalData;$i++){
    $row=pg_fetch_array($query);
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

 

 

 
