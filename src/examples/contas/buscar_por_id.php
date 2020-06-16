<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

	$id = 'a63999b558aa41c186cc80d355853483';
    
    $api->incrementUrl($id);

    $boleto = new \Zoop\BankAccounts($api);

    $boleto = $boleto->get();

    echo '<pre>';
    print_r($boleto);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}