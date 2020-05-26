<?php

try {

    $api = require_once('api.php');

    $idVendedor = '32057c75a0004432841a9a67db366150';

    $vendedor = $api->getBuyer($idVendedor);

    echo '<pre>';
    print_r($vendedor);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}