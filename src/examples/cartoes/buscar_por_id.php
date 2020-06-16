<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

	$id = 'caf04c8ed9344c43a951b1b2376f2660';
    
    $api->incrementUrl($id);

    $boleto = new \Zoop\Cards($api);

    $boleto = $boleto->get();

    echo '<pre>';
    print_r($boleto);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}