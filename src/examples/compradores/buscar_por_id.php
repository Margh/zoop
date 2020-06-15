<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = '0bfc31ea2cba4e1dbfd9705658ef3aec';

    $api->incrementUrl($id);

    $comprador = new \Zoop\Buyers($api);

    $comprador = $comprador->get();

    echo '<pre>';
    print_r($comprador);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}