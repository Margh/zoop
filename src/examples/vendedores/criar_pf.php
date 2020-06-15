<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');
    
    $type = 'individuals';

    $api->incrementUrl($type);

    $vendedor = new \Zoop\Sellers($api);

    $data = [
        "first_name"   => "Anthonio",
        "last_name"    => "Carlos",
        "email"        => "ac@gmail.com",
        "phone_number" => "+12195465432",
        "birthdate"    => "1985-12-15",
        "taxpayer_id"  => "17367530020"
    ];

    $vendedor = $vendedor->post($data);

    //Erro retornado ao tentar cadastrar um cpf(taxpayer_id) já existente
    //{"error":{"status":"Conflict","status_code":409,"type":"invalid_request_error","category":"duplicate_taxpayer_id","message":"Customer with taxpayer_id \"72857663056\" already exists."}}
    echo '<pre>';
    print_r($vendedor);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}