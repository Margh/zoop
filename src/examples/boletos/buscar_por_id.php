<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

	$id = '8e7759fda7e44ab485a16968554cfc84';
    
    $api->incrementUrl($id);

    $boleto = new \Zoop\Boletos($api);

    $boleto = $boleto->get();

    echo '<pre>';
    print_r($boleto);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}