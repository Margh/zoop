<?php

try {

    $api = require_once('../api.php');

    //https://docs.zoop.com.br/eventos-e-webhooks/guias/cadastrando-um-webhook#cadastro-de-webhooks
    $webhook = [
        'method'      => 'POST',
        'url'         => 'https://whteste.vendana.com.br',
        'description' => 'WebHook teste Vendana',
        'event'       => ['plan.created']
    ];

    $api->setApiVersion('v1');

    $webhook = $api->createWebHook($webhook);

    echo '<pre>';
    print_r($webhook);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}