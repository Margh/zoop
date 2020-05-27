<?php

try {

    $api = require_once('../api.php');

    $idComprador = '2dbc63f476db4a39bd210cbc36ead1ae';

    $comprador = $api->getBuyer($idComprador);

    echo '<pre>';
    print_r($comprador);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}