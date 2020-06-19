<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $vendedor = new \Zoop\Sellers($api);

    $cnpj = '93219324000104';

    $vendedor = $vendedor->searchByCNPJ($cnpj);

    echo '<pre>';
    print_r($vendedor);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}