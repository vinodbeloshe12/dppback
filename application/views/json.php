<?php 
$http_origin = $_SERVER['HTTP_ORIGIN'];
header('Content-type: application/json');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header('Access-Control-Max-Age: 86400');
echo json_encode($message);
?>
