<?php


try {   
    $api = require_once('../api.php');

    $vendedores = $api->getAllSellers();

    echo '<pre>';
    print_r($vendedores);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}