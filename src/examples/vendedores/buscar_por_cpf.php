<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $vendedor = new \Zoop\Sellers($api);

    $cpf = '72857663056';

    $vendedor = $vendedor->searchByCPF($cpf);

    echo '<pre>';
    print_r($vendedor);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}