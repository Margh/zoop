<?php

try {

    $api = require_once('../api.php');
    
    $api->addHeader('content-type', 'application/json');

    $api->setApiVersion('v1');

    $increment = 'tokens';

    $api->incrementUrl($increment);

    $data = [
        "bank_code"      => 341,
        "routing_number" => 6090,
        "holder_name"    => "Papito's PizzariaAAA",
        "account_number" => 25041,
        "ein"            => "93219324000104",
        "type"           => "checking"
    ];

    $account = new \Zoop\BankAccounts($api);

    $account = $account->post($data);
    
    echo '<pre>';
    print_r($account);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    var_dump($e);
}