<?php

try {

    $api = require_once('../api.php');

    $boleto = $api->generateTicket([
	    'amount'             => 10.00,
	    'description'        => 'Teste Vendana',
	    'top_instructions'   => 'Instruções de pagamento',
	    'body_instructions'  => 'Não receber após a data de vencimento.',
	    'expiration_date'    => (string)date('Y-m-d'),
		'payment_limit_date' => (string)date('Y-m-d'),
		"payment_method"     => [
			"expiration_date" => (string)date('Y-m-d'),
			"billing_instructions" => [
				"late_fee" => [
					"mode"       => "PERCENTAGE",
					"percentage" => 2
				],
				"discount" => [
					"mode" => "PERCENTAGE",
					"limit_date" => (string)date('Y-m-d', strtotime('+1 day')),
					"percentage" => 20
				]
			]
		]
	],  '2dbc63f476db4a39bd210cbc36ead1ae', '1');

    echo '<pre>';
    print_r($boleto);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}