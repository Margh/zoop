<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $vendedor = new \Zoop\BankAccounts($api);
    
    $id = 'a63999b558aa41c186cc80d355853483';

    $vendedor = $vendedor->delete($id);

    echo '<pre>';
    print_r($vendedor);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}