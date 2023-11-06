<?php
header('Content-type: application/json');
$origin = @$_SERVER['HTTP_ORIGIN'];
header("Access-Control-Allow-Origin: $origin");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

require_once 'controller/index.php';