<?php

try {

    $api = require_once('../api.php');

    $id = '';

    $api->setApiVersion('v1');

    $webhook = $api->deleteWebHook($id);

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}