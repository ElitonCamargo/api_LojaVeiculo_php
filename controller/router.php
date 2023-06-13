<?php
$rotas = [
    "veiculo"   => "veiculo.php",
    "montadora" => "montadora.php",
    "categoria" => "categoria.php"
];
$rota = $url[0];
if(array_key_exists($rota,$rotas)){
    require_once $rotas[$rota];
}
else{
    require_once 'erro404.php';
}