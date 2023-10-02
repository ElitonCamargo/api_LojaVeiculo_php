<?php
require_once 'model/Upload.php';
$result=[];
foreach($_FILES as $key => $arquivo){
    if(is_array($arquivo['name'])){ 
        $result[$key] = [];     
        foreach ($arquivo['name'] as $value) {
            $result[$key][] = $value; 
            // array_push($result[$key], $value);
        }
    }
    else{
        $result[$key] = $arquivo['name'];
    }
}

echo json_encode($result);


// $up = new Upload($arquivo,'assets/img');
// $result = $up->salvarImagem();
// if($result){    
//     http_response_code(200);
//     $retorno["result"] = true;
//     $retorno["url_arquivo"] = $result;    
// }
// else{
//     http_response_code(404);
//     $retorno["result"] = false;
//     $retorno["url_arquivo"] = '';        
// }
// echo json_encode($retorno);