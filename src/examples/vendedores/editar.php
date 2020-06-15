<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $increment = 'individuals/';
    
    $id = '815910b0a16a4bd5b1fb62777bb7b696';

    $api->incrementUrl($increment . $id);

    $vendedor = new \Zoop\Sellers($api);

    $data = [
        "first_name"   => "Anthônio",
        "last_name"    => "Carlos de Carvalho",
        "email"        => "anthoniocarvalho@gmail.com",
        "phone_number" => "+12195465432",
        "birthdate"    => "1985-12-15",
        "taxpayer_id"  => "17367530020"
    ];

    $vendedor = $vendedor->put($data);

    echo '<pre>';
    print_r($vendedor);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}