<?php


try {   
    $api = require_once('../api.php');

    $id = 'f785362a8f3a4f3bba26c881e621864d';

    $api->setApiVersion('v1');

    $account = $api->getAccountById($id);

    echo '<pre>';
    print_r($account);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}