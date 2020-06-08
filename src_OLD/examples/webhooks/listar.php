<?php

try {   
    
    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $webhooks = $api->getAllWebHooks();

    echo '<pre>';
    print_r($webhooks);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}