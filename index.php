<?php
header('Content-type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
$dadosEnviados = file_get_contents('php://input');
$dadosEnviados = json_decode($dadosEnviados, true);
$url = explode('/', $_GET['url']);
echo json_encode([
    'metodo'=>$method,
    'url' => $url,
    'dados' => $dadosEnviados
]);