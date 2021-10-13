<?php
include "config.php";
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();
$NAME = $data['NAME'];
$INGREDINETS = $data['INGREDIENTS'];
$INSTRUTION = $data['INSTRUCTION'];
$Id = $_GET['Id'];

$q = mysqli_query($con,"UPDATE 'add-recipe' SET ('NAME' ,'INGREDIENTS','INSTRUCTION') VALUES('$NAME','$INGREDINETS','$INSTRUTION') WHERE 'Id'='{$Id}' LIMIT 1" );

if($q){
    http_response_code(201);
    $message['statut'] = "success";

} else{
    http_response_code(422);
    $message['statut'] = "Error";
}

echo json_encode($message);
echo mysqli_error($con);