<?php
include "config.php";
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$message = array();
$NAME = $data['NAME'];
$INGREDINETS = $data['INGREDIENTS'];
$INSTRUTION = $data['INSTRUCTION'];

$q = mysqli_query($con, "INSERT INTO 'add-recipe' ('NAME', 'INGREDIENTS', 'INSTRUCTION') VALUES ('$NAME', '$INGREDIENTS', '$INSTRUCTION')");

if($q){
    http_response_code(201);
    $message['statut'] = "success";

} else{
    http_response_code(422);
    $message['statut'] = "Error";
}

echo json_encode($message);
echo mysqli_error($con);