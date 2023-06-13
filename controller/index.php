<?php
$method = $_SERVER['REQUEST_METHOD'];
$dadosEnviados = file_get_contents('php://input');
$dadosEnviados = json_decode($dadosEnviados);
$url = explode('/', $_GET['url']);
require_once 'router.php';

// echo json_encode([
//     'metodo'=>$method,
//     'url' => $url[0],
//     'dados' => $dadosEnviados
// ]);