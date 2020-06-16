<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $id = 'bea2119d51d34fc395bd0e0a0aaff298';

    $api->incrementUrl($id);

    $webhook = new \Zoop\Transactions($api);

    $webhook = $webhook->get();

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}