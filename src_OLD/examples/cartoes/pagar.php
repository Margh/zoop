<?php

try {

    $api = require_once('../api.php');

    $cartao = $api->payCreditCard([
		"amount"=>7,
		"currency"=>"BRL",
		"description"=>"Venda",
		"payment_type"=>"credit",
		"usage"=>"single_use",
		"card" => [
			"holder_name"      =>"JOAO SILVA",
			"expiration_month" =>"9",
			"expiration_year"  =>"2027",
			"card_number"      =>"4539003370725497",
			"security_code"    =>"123"
		],
	]);

    echo '<pre>';
    print_r($cartao);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}