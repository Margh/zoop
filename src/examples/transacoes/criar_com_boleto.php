<?php

try {

    $api = require_once('../api.php');

	//usar a v1 para boletos
	$api->setApiVersion('v1');

	$data = [
		"amount"       => 300,
		"currency"     => "BRL",
		"description"  => "venda",
		"on_behalf_of" => "3cacf5fb446e4c3abf969157143942c2",
		"customer"     => "c40c434aa8f344ed9fcbdbd504468eda",
		"payment_type" => "boleto"
	];

	$boleto = new \Zoop\Transactions($api);

	$boleto = $boleto->create($data);

    echo '<pre>';
    print_r($boleto);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}