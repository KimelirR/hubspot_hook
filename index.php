<?php
// Sample array
$data =file_get_contents("data.json");
function retrieve_data($data){
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    return $data;
    exit();
}

echo retrieve_data($data);

// header("Content-Type: application/json");
//     echo $data;
//     exit();
?>





