<?php


try {   
    $api = require_once('../api.php');

    $content = [
        "customer" => "0107577210ce4bc1b79a761f8f17c255",
        "token"    => "e56e35b14651421e8960f68caea618d1",
    ];

    $api->setApiVersion('v1');
    
    $account = $api->associateAccount($content);

    echo '<pre>';
    print_r($account);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}