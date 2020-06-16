<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = 'e121b31727b642a5869d917efe089825';

    $api->incrementUrl($id);

    $token = new \Zoop\Tokens($api);

    $token = $token->get();

    echo '<pre>';
    print_r($token);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}