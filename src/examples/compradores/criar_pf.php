<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $comprador = new \Zoop\Buyers($api);

    $data = [
        'first_name' => 'José',
        'last_name'  => 'Souza',
        'taxpayer_id' => '07873570061',
        'email' => 'jose@gmail.com',
        'address' => [
            'line1' => 'Av Americas, 500',
            'line2' => 'Citta América',
            'neighborhood' => 'Barra da Tijuca',
            'city' => 'Rio de Janeiro',
            'state' => 'RJ',
            'postal_code' => '22845046',
            'country_code' => 'BR'
        ],
    ];

    $comprador = $comprador->post($data);

    echo '<pre>';
    print_r($comprador);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}