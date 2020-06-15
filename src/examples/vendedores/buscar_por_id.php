<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = '815910b0a16a4bd5b1fb62777bb7b696';

    $api->incrementUrl($id);

    $vendedor = new \Zoop\Sellers($api);

    $vendedor = $vendedor->get();

    echo '<pre>';
    print_r($vendedor);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}