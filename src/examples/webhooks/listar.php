<?php

try {

    $api = require_once('../api.php');
    
    $api->setApiVersion('v1');

    $webhook = new \Zoop\Webhooks($api);

    $webhook = $webhook->searchAll([
        'limit'=>'20',
        'sort' => 'time-descending', 
        'offset' => 0
    ]);

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}