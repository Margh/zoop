<?php

try {   
    
    $api = require_once('api.php');

    $idTransacao = '';

    $transacao = $api->getTransaction($idTransacao);

    echo '<pre>';
    print_r($transacao);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}