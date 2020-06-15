<?php

try {

    $api = require_once('../api.php');
    
    $api->setApiVersion('v1');

    $data = [
        "holder_name"     => "João Silva",
        "expiration_month"=> "03",
        "expiration_year" => "2018",
        "security_code"   => "123",
        "card_number"     => "5201561050024014"
    ];

    $card = new \Zoop\Cards($api);

    $card = $card->post($data);

    echo '<pre>';
    print_r($card);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}