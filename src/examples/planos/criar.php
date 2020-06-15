<?php

try {

    $api = require_once('../api.php');

    //usar a v2 para planos
    $api->setApiVersion('v2');

    //não adicionar esse header direto no construtor da api
    //isso causará problema em outro endpoint
    $api->addHeader('content-type', 'application/json');

    $plano = new \Zoop\Plans($api);

    $data = [
        "name"            => "Basico",
        "frequency"       => "monthly",
        "interval"        => 1,
        "payment_methods" => ["credit"],
        "currency"         => "BRL",
        "amount"           => 10000,
        "description"      => "Plano basico",
        "grace_period"     => 7,
        "tolerance_period" => 5
    ];

    $plano = $plano->post($data);
    
    echo '<pre>';
    print_r($plano);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}