<?php

try {

    $api = require_once('../api.php');

	$id = '8e7759fda7e44ab485a16968554cfc84';

    $boleto = $api->getTicket($id);

    echo '<pre>';
    print_r($boleto);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}