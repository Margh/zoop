<?php

try {

    $api = require_once('../api.php');

    //usar a v1 para cartões
    $api->setApiVersion('v1');

    //não adicionar esse header direto no construtor da api
    //isso causará problema em outro endpoint
    $api->addHeader('content-type', 'application/json');

    $plano = new \Zoop\Cards($api);

    $data = [
        "token"    => "",
        "customer" => "0bfc31ea2cba4e1dbfd9705658ef3aec",
    ];

    $plano = $plano->post($data);

    echo '<pre>';
    print_r($plano);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}