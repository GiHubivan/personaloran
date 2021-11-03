<?php 
include '../config/conn.php';
$sql = "SELECT id,nombre,apellido,dni,correo,nace,sexo  FROM persona where estado='visible'";
$query=pg_exec($con, $sql) or die(pg_last_error());
$totalData = pg_num_rows($query);
//echo $totalData;
/*$totalFiltered = $totalData; 

$data = array();
while( $row=pg_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 
	$nestedData[] = $row["id"];
    $nestedData[] = $row["nombre"];
	$nestedData[] = $row["apellido"];
	$nestedData[] = $row["dni"];
    $nestedData[] = $row["correo"];
    $nestedData[] = date("d/m/Y", strtotime($row["nace"]));
  //  $nestedData[] = '<td><center>
    //                 <a href="editar.php?id='.$row['id'].'"  data-toggle="tooltip" title="Editar datos" class="btn btn-sm btn-info"> <i class="menu-icon icon-pencil"></i> </a>
      //               <a href="index2.php?action=delete&id='.$row['id'].'"  data-toggle="tooltip" title="Eliminar" class="btn btn-sm btn-danger"> <i class="menu-icon icon-trash"></i> </a>
		//		     </center></td>';		
	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);
*/
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
    
    array_push($result_array,$row);
}/*
if($totalData > 0)
{
    foreach($query as $row)
    {
        array_push($result_array, $row);
    }
    
}*/
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

 

 

 
