<?php

try {

    $api = require_once('../api.php');

    $cnpj = '09578520000150';

    $comprador = $api->getBuyerByCNPJ($cnpj);

    echo '<pre>';
    print_r($comprador);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}