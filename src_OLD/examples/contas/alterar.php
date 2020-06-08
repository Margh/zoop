<?php

try {

    $api = require_once('../api.php');

    $id = '18a3f1b10954465487c84d0303f33a13';

    $account = [
        "bank_code"      => 341,
        "routing_number" => 6091,
        "holder_name"    => "Teste",
        "description"    => "Teste",
        "account_number" => 25041,
        "ein"            => "93219324000104",
        "type"           => "checking",
        "is_active"      => false
    ];

    $api->setApiVersion('v1');

    $account = $api->putAccount($id, $account);
    
    echo '<pre>';
    print_r($account);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}