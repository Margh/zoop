<?php

try {

    $api = require_once('../api.php');

    //usar a v2 para planos
    $api->setApiVersion('v2');

    $fatura = new \Zoop\Invoices($api);

    $fatura = $fatura->searchAll([
        'limit'=>'20',
        'sort' => 'time-descending', 
        'offset' => 0
    ]);
    
    echo '<pre>';
    print_r($fatura);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}