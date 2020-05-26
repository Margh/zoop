<?php

try {

    $api = require_once('api.php');

    $assinaturas = $api->getAllInvoices();
    
    echo '<pre>';
    print_r($assinaturas);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}