<?php

try {

    $api = require_once('../api.php');

    $id = 'e557a2d753f24383bc9c184e876eecd2';

    //Deleta o plano do Marketplace
    $response = $api->deletePlan($id);

    echo '<pre>';
    print_r($response);

    //Erro retornado caso o comprador não exista
    //{"error":{"status":"Not Found","status_code":404,"type":"invalid_request_error","category":"resource_not_found","message":"Sorry, the buyer you are trying to use does not exist or has been deleted."}}

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}