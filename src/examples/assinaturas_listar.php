<?php

try {

    $api = require_once('api.php');

    $assinaturas = $api->getAllSubscriptions();
    
    echo '<pre>';
    print_r($assinaturas);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}