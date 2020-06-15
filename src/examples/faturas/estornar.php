<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $id          = '608b41fac101411cad451ebd94e3d0c3';
    $complemento = '/void';

    $api->incrementUrl($id.$complemento);

    $fatura = new \Zoop\Invoices($api);

    $fatura = $fatura->post();

    echo '<pre>';
    print_r($fatura);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}