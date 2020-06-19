<?php

try {

    $api = require_once('../api.php');
    
    //para a v2 não funciona
    $api->setApiVersion('v1');

    $transaction = new \Zoop\Transactions($api);

    $transaction = $transaction->searchAll([
        'limit'=>'20',
        'sort' => 'time-descending'
    ]);

    echo '<pre>';
    print_r($transaction);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}