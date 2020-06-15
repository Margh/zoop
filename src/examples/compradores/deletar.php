<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = '6fa5691c0169488fa0a4f8e16eb639bd';
    
    $api->incrementUrl($id);

    $comprador = new \Zoop\Buyers($api);

    $comprador = $comprador->delete($id);

    echo '<pre>';
    print_r($comprador);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}