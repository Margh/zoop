<?php

try {

    $api = require_once('../api.php');
    
    $api->setApiVersion('v1');
    
    $api->addHeader('content-type', 'application/json');

    $data = [
        'method'      => 'POST',
        'url'         => 'https://whteste.vendana.com.br',
        'description' => 'WebHook teste Vendana',
        'event'       => ['plan.created']
    ];

    $webhook = new \Zoop\Webhooks($api);

    $webhook = $webhook->post($data);

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}