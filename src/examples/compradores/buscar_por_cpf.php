<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');
    
    $type = 'search';

    $api->incrementUrl($type);

    $comprador = new \Zoop\Buyers($api);
    
    $paramns = [
        'taxpayer_id' => '13962656782'
    ];

    $comprador = $comprador->get($paramns);

    echo '<pre>';
    print_r($comprador);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}