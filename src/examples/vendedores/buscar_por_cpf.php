<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');
    
    $type = 'search';

    $api->incrementUrl($type);

    $vendedor = new \Zoop\Sellers($api);
    
    $paramns = [
        'taxpayer_id' => '17367530020'
    ];

    $vendedor = $vendedor->get($paramns);

    echo '<pre>';
    print_r($vendedor);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}