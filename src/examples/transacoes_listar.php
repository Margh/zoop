<?php

try {   
    
    $api = require_once('api.php');

    $listarTransacoes = $api->getAllTransactions();

    echo '<pre>';
    print_r($listarTransacoes);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}