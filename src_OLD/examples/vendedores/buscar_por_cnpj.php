<?php

try {

    $api = require_once('../api.php');

    $cnpj = '09578520000150';

    $vendedor = $api->getSellerByCNPJ($cnpj);

    echo '<pre>';
    print_r($vendedor);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}