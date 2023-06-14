<?php
# Os dados de requisição enviados para a API estão sendo salvos dentro da constante GET
define('GET',[
    'method' => $_SERVER['REQUEST_METHOD'],
    'dadosRecebidos' => json_decode(file_get_contents('php://input')),
    'url' => explode('/', $_GET['url'])
]);
# Definindo todos as contas possíveis da aplicação;
$rotas = [
    "veiculo"   => "veiculo.php",
    "montadora" => "montadora.php",
    "categoria" => "categoria.php"
];
# Direcionando a aplicação para a rota especifica.
$rota = GET['url'][0];
if(array_key_exists($rota,$rotas)){
    require_once $rotas[$rota];
}
else{
    require_once 'erro404.php';
}