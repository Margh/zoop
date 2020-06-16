<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = 'bb70c02b35364d5fab4d509f10f8f186';
    
    $api->incrementUrl($id);

    $fatura = new \Zoop\Cards($api);

    $fatura = $fatura->delete();

    echo '<pre>';
    print_r($fatura);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}