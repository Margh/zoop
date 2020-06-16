<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $contas = new \Zoop\BankAccounts($api);

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