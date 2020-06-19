<?php


try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');
    
    $vendedores = new \Zoop\Sellers($api);

    $vendedores = $vendedores->searchAll([
        'limit'=>'20',
        'sort' => 'time-descending', 
        'offset' => 0
    ]);

    echo '<pre>';
    print_r($vendedores);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}