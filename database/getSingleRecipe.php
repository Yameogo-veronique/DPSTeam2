<?php
include "config.php";

$data = array();
$id = $_GET['Id'];
$q = mysqli_query($con, "SELECT *FROM 'add-recipe' WHERE 'Id' = $Id LIMIT 1");

while ($row = mysqli_fetch_object($q)){
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($con);