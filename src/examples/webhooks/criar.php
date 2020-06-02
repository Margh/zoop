<?php

try {

    $api = require_once('../api.php');

    $webhook = [
        'method'      => 'POST',
        'url'         => 'https://whteste.vendana.com.br',
        'description' => 'WebHook teste Vendana',
        'events'      => ["plan.created"]
    ];

    $api->setApiVersion('v1');

    $webhook = $api->createWebHook($webhook);

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}