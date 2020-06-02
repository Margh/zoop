<?php


try {   
    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $accounts = $api->getAllAccounts();

    echo '<pre>';
    print_r($accounts);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}