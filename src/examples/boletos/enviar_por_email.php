<?php

try {

    $api = require_once('../api.php');

    //usar a v1 para boletos
    $api->setApiVersion('v1');

    $boleto = new \Zoop\Boletos($api);
    
	$id = '8e7759fda7e44ab485a16968554cfc84';

    $boleto = $boleto->sendByEmail($id);

    echo '<pre>';
    print_r($boleto);

    //retorno em caso de sucesso
    //Array( [message] => success )

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}