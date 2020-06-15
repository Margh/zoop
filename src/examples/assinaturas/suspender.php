<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $id = '9d4fd37f590d4771974e1ff909f9f592';
    $complement = '/suspend';

    $api->incrementUrl($id . $complement);

    $assinatura = new \Zoop\Subscriptions($api);

    $assinatura = $assinatura->post();

    echo '<pre>';
    print_r($assinatura);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}