<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $assinatura = new \Zoop\Subscriptions($api);

    $assinatura = $assinatura->get();

    echo '<pre>';
    print_r($assinatura);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}