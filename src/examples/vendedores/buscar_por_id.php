<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $vendedor = new \Zoop\Sellers($api);
    
    $id = 'eaac5328426b476880c95d19956e66ed';

    $vendedor = $vendedor->searchById($id);

    echo '<pre>';
    print_r($vendedor);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}