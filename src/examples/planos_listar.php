<?php


try {   
    $api = require_once('api.php');

    $planos = $api->getAllPlans();

    echo '<pre>';
    print_r($planos);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}