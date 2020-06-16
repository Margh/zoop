<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $api->addHeader('content-type', 'application/json');

    $plano = new \Zoop\BankAccounts($api);

    //O id do customer deve ser igual ao que foi usado no token
    $data = [
        "token"    => "248c3a0c1b354fac9639da2edcf0fea8",
        "customer" => "0107577210ce4bc1b79a761f8f17c255",
    ];

    $plano = $plano->post($data);

    echo '<pre>';
    print_r($plano);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}