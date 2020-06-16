<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = 'fa6dd7c08e4247e5830c900f397184d9';

    $api->incrementUrl($id);

    $plano = new \Zoop\Sources($api);

    $plano = $plano->get();

    echo '<pre>';
    print_r($plano);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}