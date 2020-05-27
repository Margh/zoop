<?php

try {

    $api = require_once('../api.php');

	$id = '20aaf65f40e0437a9c4357490c53aaf8';

    $boleto = $api->sendTicketByEmail($id);

    echo '<pre>';
    print_r($boleto);

    //retorno em caso de sucesso
    //Array( [message] => success )

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}