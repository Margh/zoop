<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $comprador = new \Zoop\Buyers($api);
    
    $cpf = '07026400770';

    $comprador = $comprador->searchByCPF($cpf);

    echo '<pre>';
    print_r($comprador);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}