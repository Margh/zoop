<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $api->addHeader('content-type', 'application/json');

    $fatura = new \Zoop\BankAccounts($api);

    $data = [
        "bank_code"      => 341,
        "routing_number" => 6090,
        "holder_name"    => "Papito's PizzariaAAA",
        "account_number" => 25041,
        "ein"            => "93219324000104",
        "type"           => "checking"
    ];

    $fatura = $fatura->put($data);
    
    echo '<pre>';
    print_r($fatura);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}