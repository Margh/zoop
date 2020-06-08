<?php

try {

    $api = require_once('../api.php');

    $newSubscription =[
        "plan"             => "42473a92752a45b48c7a0ce48d375298", //id plano
        "on_behalf_of"     => "3cacf5fb446e4c3abf969157143942c2", //id vendedor
        "customer"         => "2dbc63f476db4a39bd210cbc36ead1ae", //id comprador  
        "payment_method"   => "credit",
        "due_date"         => "2020-07-01",
        "due_since_date"   => "2020-06-01",
        "expiration_date"  => "2020-07-01",
        "amount"           => "18000",
        "currency"         => "BRL",
        "grace_period"     => "7",
        "tolerance_period" => "5"
    ];

    $plano = $api->createSubscription($newSubscription);
    
    echo '<pre>';
    print_r($plano);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}