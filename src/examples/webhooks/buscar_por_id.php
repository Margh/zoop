<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = 'eed4a08ec54c4cd3acf2232f0eaba023';

    $api->incrementUrl($id);

    $webhook = new \Zoop\Webhooks($api);

    $webhook = $webhook->get();

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}