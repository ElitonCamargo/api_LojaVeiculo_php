<?php

echo json_encode(
    [
        "arquivo"=>"veículo",
        "method" =>$method,
        "dadosRecebidos"=>$dadosRecebidos,
        "url"=>$url    
    ]
);