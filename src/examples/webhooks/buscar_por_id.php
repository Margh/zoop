<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $webhook = new \Zoop\Webhooks($api);

    $id = 'eed4a08ec54c4cd3acf2232f0eaba023';

    $webhook = $webhook->searchById($id);

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}