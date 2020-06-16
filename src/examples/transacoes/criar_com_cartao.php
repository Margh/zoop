<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $data = [
        'amount'               => 1000, //centavos
        'currency'             => 'BRL',
        'description'          => 'teste cartão',
        'on_behalf_of'         => '3cacf5fb446e4c3abf969157143942c2',
        'statement_descriptor' => 'TESTE VENDANA',
        'payment_type'         => 'credit',
        'source'               => [
            'usage'    => 'single_use',
            'amount'   => 1000,
            'currency' => 'BRL',
            'type'     => 'card',
            'card'     => [
                'card_number'      => '5201561050024014',
                'holder_name'      => 'João Silva',
                'expiration_month' => '03',
                'expiration_year'  => '2018',
                'security_code'    => '123',
            ],
        ],
    ];

    $card = new \Zoop\Transactions($api);

    $card = $card->post($data);

    echo '<pre>';
    print_r($card);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}