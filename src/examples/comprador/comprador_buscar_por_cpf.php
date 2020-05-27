<?php

try {

    $api = require_once('../api.php');

    $cpf = '11836128770';

    $comprador = $api->getBuyerByCpf($cpf);

    echo '<pre>';
    print_r($comprador);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}