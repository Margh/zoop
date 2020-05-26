<?php

try {

    $api = require_once('api.php');

    $newInvoice = [
        "subscription"      => "<uuid>",
        "on_behalf_of"      => "<uuid>",
        "customer"          => "<uuid>",
        "description"       => "<text>",
        "payment_method"    => "<string>",
        "due_date"          => "<date>",
        "expiration_date"   => "<date>",
        "amount"            => "<integer>",
        "currency"          => "<string>",
        "grace_period"      => "<integer>",
        "tolerance_period"  => "<integer>",
        "retries"           => "<integer>",
        "max_retries"       => "<integer>"
    ];

    $fatura = $api->createInvoice($newInvoice);
    
    echo '<pre>';
    print_r($fatura);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}