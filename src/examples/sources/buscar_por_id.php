<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $plano = new \Zoop\Sources($api);
    
    $id = 'fa6dd7c08e4247e5830c900f397184d9';

    $plano = $plano->searchById($id);

    echo '<pre>';
    print_r($plano);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}