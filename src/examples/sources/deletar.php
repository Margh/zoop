<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $source = new \Zoop\Sources($api);
    
    $id = 'fa6dd7c08e4247e5830c900f397184d9';

    $source = $source->delete($id);

    echo '<pre>';
    print_r($source);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}