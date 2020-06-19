<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $token = new \Zoop\Tokens($api);
    
    $id = 'e121b31727b642a5869d917efe089825';

    $token = $token->searchById($id);

    echo '<pre>';
    print_r($token);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}