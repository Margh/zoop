<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $id = '58b5962cf47e410fa590dc9759ba6202';
    
    $api->incrementUrl($id);

    $assinatura = new \Zoop\Subscriptions($api);

    $assinatura = $assinatura->delete();

    echo '<pre>';
    print_r($assinatura);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}