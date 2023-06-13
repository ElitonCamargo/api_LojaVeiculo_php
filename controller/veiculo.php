<?php
switch($method){
    case "GET":{
        echo json_encode(["method"=>"GET"]);
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