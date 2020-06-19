<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $plano = new \Zoop\Plans($api);

    $plano = $plano->searchAll();

    echo '<pre>';
    print_r($plano);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}