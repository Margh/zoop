<?php

try {

    $api = require_once('../api.php');

    $id = '3a191c9d120a4382bb328d6b744fb561';

    $api->setApiVersion('v1');

    $webhook = $api->deleteWebHook($id);

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}