<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $card = new \Zoop\Transactions($api);
    
    $id = 'bea2119d51d34fc395bd0e0a0aaff298';
    
    $data = [
        'on_behalf_of' => '3cacf5fb446e4c3abf969157143942c2',
        'amount'       => 1000
    ];

    $card = $card->capture($id, $data);

    echo '<pre>';
    print_r($card);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}