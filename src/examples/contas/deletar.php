<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = 'a63999b558aa41c186cc80d355853483';
    
    $api->incrementUrl($id);

    $vendedor = new \Zoop\BankAccounts($api);

    $vendedor = $vendedor->delete();

    echo '<pre>';
    print_r($vendedor);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}