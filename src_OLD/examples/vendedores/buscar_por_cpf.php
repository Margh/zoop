<?php

try {

    $api = require_once('../api.php');

    $cpf = '72857663056';

    $vendedor = $api->getSellerByCPF($cpf);

    echo '<pre>';
    print_r($vendedor);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}