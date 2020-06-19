<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $data = [
        "bank_code"      => 341,
        "routing_number" => 6090,
        "holder_name"    => "Papito's PizzariaAAA",
        "account_number" => 25041,
        "ein"            => "93219324000104",
        "type"           => "checking"
    ];

    $account = new \Zoop\BankAccounts($api);

    $account = $account->create($data);
    
    echo '<pre>';
    print_r($account);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    var_dump($e);
}