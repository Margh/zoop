<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $assinatura = new \Zoop\Subscriptions($api);
    
    $id = '9d4fd37f590d4771974e1ff909f9f592';

    $assinatura = $assinatura->searchById($id);

    echo '<pre>';
    print_r($assinatura);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}