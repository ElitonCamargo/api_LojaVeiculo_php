<?php
require_once 'model/Veiculo.php';
require_once 'view/Veiculo.php';

# Removendo 'veiculo' da array $url;
array_shift($url);

function get($consulta, $valor=''){
    $veiculo = new Veiculo();
    $viewVeiculo = new ViewVeiculo();
    if($consulta == "id"){
        $veiculo = $veiculo->consultarPorId($valor);
        $viewVeiculo->exibirVeiculo($veiculo);        
    }
    elseif($consulta == "modelo"){
        $veiculos = $veiculo->consultar($valor);
        $viewVeiculo->exibirVeiculos($veiculos);
    }
    else{
        $veiculos = $veiculo->consultar();
        $viewVeiculo->exibirVeiculos($veiculos);
    }

} 


switch($method){    
    case "GET":get(@$url[0],@$url[1]);
    break;
    case "POST":{
        echo json_encode(["method"=>"POST"]);
    }
    break;
    case "PUT":{
        echo json_encode(["method"=>"PUT"]);
    }
    break;
    case "DELETE":{
        echo json_encode(["method"=>"DELETE"]);
    }
    break;
    default:{
        echo json_encode(["method"=>"ERRO"]);
    }
    break;
}