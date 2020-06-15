<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = '0bfc31ea2cba4e1dbfd9705658ef3aec';
    
    $api->incrementUrl($id);

    $comprador = new \Zoop\Buyers($api);

    $data = [
        'first_name' => 'José Carlos',
        'last_name'  => 'Souza',
        'email' => 'josesouza@gmail.com',
        'address' => [
            'line1' => 'Av Americas, 502',
            'line2' => 'Citta América',
            'neighborhood' => 'Barra da Tijuca',
            'city' => 'Rio de Janeiro',
            'state' => 'RJ',
            'postal_code' => '22845046',
            'country_code' => 'BR'
        ],
    ];

    $comprador = $comprador->put($data);

    echo '<pre>';
    print_r($comprador);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}