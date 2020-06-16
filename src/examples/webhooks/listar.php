<?php

try {

    $api = require_once('../api.php');
    
    $api->setApiVersion('v1');

    $webhook = new \Zoop\Webhooks($api);

    $webhook = $webhook->get();

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}