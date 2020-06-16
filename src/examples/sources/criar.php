<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $api->addHeader('content-type', 'application/json');

    $source = new \Zoop\Sources($api);

    $data = [
        "usage" => "single_use",
        "amount"       => 1000,
        "currency"     => "BRL",
        "description"  => "venda 152",
        "type"         => "card",
        "capture"      => true,
        "reference_id" => "152",
        "on_behalf_of" => "3cacf5fb446e4c3abf969157143942c2",
        "card"  => [
            "id"               => "caf04c8ed9344c43a951b1b2376f2660",
            "amount"           => 1000,
            "holder_name"      => "teste",
            "expiration_month" => "03",
            "expiration_year"  => "2021",
            "card_number"      => "3213123213",
            "security_code"    => "123"
        ],
        "installment_plan" => [
            "mode"                => "interest_free",
            "number_installments" => 12
        ],
        "customer" => [
            "id"     => "0bfc31ea2cba4e1dbfd9705658ef3aec",
            "amount" => 1000
        ],
        "token" => [
            "id"     => "e121b31727b642a5869d917efe089825",
            "amount" => 1000
        ]
    ];

    $source = $source->post($data);
    
    echo '<pre>';
    print_r($source);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}