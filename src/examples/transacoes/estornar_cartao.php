<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $id = 'e82efe709e0a4eee9f484d7e41a1ce42';

    $complemento = '/void';

    $api->incrementUrl($id.$complemento);

    $data = [
        'on_behalf_of' => '3cacf5fb446e4c3abf969157143942c2',
        'amount'       => 1000
    ];

    $card = new \Zoop\Transactions($api);

    $card = $card->post($data);

    echo '<pre>';
    print_r($card);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}