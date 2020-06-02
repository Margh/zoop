<?php

try {

    $api = require_once('../api.php');

    $account = [
        "bank_code"      => 341,
        "routing_number" => 6090,
        "holder_name"    => "Papito's PizzariaAAA",
        "account_number" => 25041,
        "ein"            => "93219324000104",
        "type"           => "checking"
    ];

    $api->setApiVersion('v1');

    $account = $api->createAccount($account);
    
    echo '<pre>';
    print_r($account);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    var_dump($e);
}