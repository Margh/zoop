<?php

try {

    $api = require_once('../api.php');

	//usar a v1 para boletos
	$api->setApiVersion('v1');
	$api->addHeader('content-type', 'application/json');

	$data = [
		'currency'           => 'BRL',
	    'amount'             => 1100,
		'payment_type'       => 'boleto',
	    'description'        => 'Teste Vendana',
		'on_behalf_of'       => '3cacf5fb446e4c3abf969157143942c2',
		'capture'            => false,
		'customer'           => 'c40c434aa8f344ed9fcbdbd504468eda',
		"payment_method"     => [
			"expiration_date" => (string)date('Y-m-d'),
			'top_instructions'   => 'Instruções de pagamento',
			'body_instructions'  => 'Não receber após a data de vencimento.',
			'payment_limit_date' => (string)date('Y-m-d'),
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
		],
		'source' => [
			'usage'        => 'single_use',
			'type'         => 'customer',
			'capture'      => false,
			'on_behalf_of' => '3cacf5fb446e4c3abf969157143942c2'
		]
	];

	$boleto = new \Zoop\Transactions($api);

	$boleto = $boleto->post($data);

    echo '<pre>';
    print_r($boleto);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}