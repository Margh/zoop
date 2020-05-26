<?php

try {

    $api = require_once('api.php');

    $comprador = $api->createBuyer([
        'first_name' => 'Victor',
        'last_name'  => 'Aguiar',
        'taxpayer_id' => '11836128770',
        'email' => 'ricardo.pedrosa@zoop.co',
        'address' => [
            'line1' => 'Av Americas, 500',
            'line2' => 'Citta América',
            'neighborhood' => 'Barra da Tijuca',
            'city' => 'Rio de Janeiro',
            'state' => 'RJ',
            'postal_code' => '22845046',
            'country_code' => 'BR'
        ],
    ]);
    
    echo '<pre>';
    print_r($comprador);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}