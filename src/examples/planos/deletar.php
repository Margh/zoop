<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v2');

    $plano = new \Zoop\Plans($api);
    
    $id = '54d4da147f5d43608cdfb4e64bd007da';

    $plano = $plano->delete($id);

    echo '<pre>';
    print_r($plano);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}