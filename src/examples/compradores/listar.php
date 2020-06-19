<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');
    
    $compradores = new \Zoop\Buyers($api);

    $compradores = $compradores->searchAll([
        'limit'=>'20',
        'sort' => 'time-descending', 
        'offset' => 0
    ]);

    echo '<pre>';
    print_r($compradores);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}