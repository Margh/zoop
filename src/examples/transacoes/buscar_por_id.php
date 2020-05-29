<?php

try {   
    
    $api = require_once('../api.php');

    $idTransacao = '0b6dc51da31945a68400709b3ac9f592';

    $transacao = $api->getTransaction($idTransacao);

    echo '<pre>';
    print_r($transacao);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}