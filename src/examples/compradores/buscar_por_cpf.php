<?php

try {

    $api = require_once('../api.php');

    $cpf = '66624007001';

    $comprador = $api->getBuyerByCPF($cpf);

    echo '<pre>';
    print_r($comprador);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}