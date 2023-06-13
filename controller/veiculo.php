<?php
require_once 'model/Veiculo.php';
$veiculo = new Veiculo();
switch($method){
    case "GET":{
        $lista_veiculos = $veiculo->consultar();
        $retorno = [
            'result'=>true,
            'dados' =>$lista_veiculos
        ];
        echo json_encode($retorno);
    }
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

// echo json_encode(
//     [
//         "arquivo"=>"veículo",
//         "method" =>$method,
//         "dadosRecebidos"=>$dadosRecebidos,
//         "url"=>$url    
//     ]
// );