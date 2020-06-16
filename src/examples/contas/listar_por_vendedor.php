<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = '3cacf5fb446e4c3abf969157143942c2';
    
    $complemento = '/bank_accounts';

    $api->incrementUrl($id.$complemento);

    $contas = new \Zoop\Sellers($api);

    $contas = $contas->get([
        'limit'=>'20',
        'sort' => 'time-descending', 
        'offset' => 0
    ]);
    
    echo '<pre>';
    print_r($contas);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}