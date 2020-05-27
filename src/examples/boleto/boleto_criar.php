<?php

try {

    $api = require_once('../api.php');

    $boleto = $api->generateTicket(array(
	    'amount' => 100.00,
	    'description' => 'Pagamento Zoop',
	    'top_instructions' => 'Instruções de pagamento',
	    'body_instructions' => 'Não receber após a data de vencimento.',
	    'expiration_date' => (string)date('Y-m-d'),
	    'payment_limit_date' => (string)date('Y-m-d')
	),  '2dbc63f476db4a39bd210cbc36ead1ae', '1');

    echo '<pre>';
    print_r($boleto);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}