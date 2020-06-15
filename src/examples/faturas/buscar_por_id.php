<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $id = '608b41fac101411cad451ebd94e3d0c3';

    $api->incrementUrl($id);

    $fatura = new \Zoop\Invoices($api);

    $fatura = $fatura->get();

    echo '<pre>';
    print_r($fatura);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}