<?php

try {

    $api = require_once('../api.php');

	$id = '20aaf65f40e0437a9c4357490c53aaf8';

    $boleto = $api->getTicket($id);

    echo '<pre>';
    print_r($boleto);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}