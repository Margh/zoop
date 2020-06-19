<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $boleto = new \Zoop\BankAccounts($api);
    
	$id = 'c4e79189e67e4ccc8732695ff293e33b';

    $boleto = $boleto->searchById($id);

    echo '<pre>';
    print_r($boleto);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}