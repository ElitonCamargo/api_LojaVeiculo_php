<?php
$method = $_SERVER['REQUEST_METHOD'];
$dadosRecebidos = file_get_contents('php://input');
$dadosRecebidos = json_decode($dadosRecebidos);
$url = explode('/', $_GET['url']);
require_once 'router.php';