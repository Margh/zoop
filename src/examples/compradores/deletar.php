<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $comprador = new \Zoop\Buyers($api);
    
    $id = '6fa5691c0169488fa0a4f8e16eb639bd';

    $comprador = $comprador->delete($id);

    echo '<pre>';
    print_r($comprador);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}