<?php

try {

    $api = require_once('../api.php');

    $idComprador = 'cb876c7e68c24fec910c97f0336fee7a';

    //Deleta o comprador do Marketplace
    $response = $api->deleteBuyer($idComprador);

    echo '<pre>';
    print_r($response);

    //Erro retornado caso o comprador não exista
    //{"error":{"status":"Not Found","status_code":404,"type":"invalid_request_error","category":"resource_not_found","message":"Sorry, the buyer you are trying to use does not exist or has been deleted."}}

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}