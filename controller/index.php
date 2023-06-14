<?php
define('GET',[
    'method' => $_SERVER['REQUEST_METHOD'],
    'dadosRecebidos' => json_decode(file_get_contents('php://input')),
    'url' => explode('/', $_GET['url'])
]);
require_once 'router.php';