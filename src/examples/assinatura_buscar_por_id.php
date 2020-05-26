<?php

try {

    $api = require_once('api.php');

    $id = '58b5962cf47e410fa590dc9759ba6202';

    $assinatura = $api->getSubscription($id);
    
    echo '<pre>';
    print_r($assinatura);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}