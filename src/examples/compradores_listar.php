<?php


try {   
    $api = require_once('api.php');

    $compradores = $api->getAllBuyers();

    echo '<pre>';
    print_r($compradores);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}