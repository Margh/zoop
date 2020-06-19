<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $fatura = new \Zoop\Invoices($api);
    
    $id = '608b41fac101411cad451ebd94e3d0c3';
    
    $fatura = $fatura->searchById($id);

    echo '<pre>';
    print_r($fatura);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}