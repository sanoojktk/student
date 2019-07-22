<?php
include("../../model/config.php");
$sql = "SELECT id, maker,model FROM model";
$result = $mysqli->query($sql);
$json_response = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$row_array['id'] 		= $row['id'];
$row_array['maker'] 	= $row['maker'];
$row_array['model'] 	= $row['model'];
array_push($json_response,$row_array);
}
}
echo json_encode($json_response);

?> 

