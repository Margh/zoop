<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $id = '54d4da147f5d43608cdfb4e64bd007da';

    $api->incrementUrl($id);

    $plano = new \Zoop\Plans($api);

    $plano = $plano->get();

    echo '<pre>';
    print_r($plano);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}