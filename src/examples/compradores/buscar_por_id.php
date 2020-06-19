<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    //$api->incrementUrl($id);
    
    $comprador = new \Zoop\Buyers($api);
    
    $id = "2683aa76753e4345a20a1d4c52c45143";

    $comprador = $comprador->searchById($id);

    echo '<pre>';
    print_r($comprador);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}