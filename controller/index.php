<?php
$method = $_SERVER['REQUEST_METHOD'];
$dadosEnviados = file_get_contents('php://input');
$dadosEnviados = json_decode($dadosEnviados, true);
$url = explode('/', $_GET['url']);

$dadosEnviados['id'] = 10;
echo json_encode([
    'metodo'=>$method,
    'url' => $url,
    'dados' => $dadosEnviados
]);