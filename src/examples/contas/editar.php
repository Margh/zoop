<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $conta = new \Zoop\BankAccounts($api);

    $data = [
        "bank_code"      => 341,
        "routing_number" => 6090,
        "holder_name"    => "Papito's PizzariaAAA",
        "account_number" => 25041,
        "ein"            => "93219324000104",
        "type"           => "checking",
        "is_active"      => 0
    ];

    $id = "c4e79189e67e4ccc8732695ff293e33b";

    $conta = $conta->edit($id, $data);
    
    echo '<pre>';
    print_r($conta);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}