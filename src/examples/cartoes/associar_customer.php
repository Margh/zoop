<?php

try {

    $api = require_once('../api.php');

    //usar a v1 para cartões
    $api->setApiVersion('v1');

    $card = new \Zoop\Cards($api);

    //O id do customer deve ser igual ao que foi usado no token
    $data = [
        "token"    => "181fd6aa74b44076a2264fe39156cf8e",
        "customer" => "0bfc31ea2cba4e1dbfd9705658ef3aec",
    ];

    $card = $card->linkCustomer($data);

    echo '<pre>';
    print_r($card);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}