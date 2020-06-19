<?php

try {

    $api = require_once('../api.php');

    //usar a v2 para assinaturas
    $api->setApiVersion('v2');

    $assinatura = new \Zoop\Subscriptions($api);

    $data =[
        "plan"             => "54d4da147f5d43608cdfb4e64bd007da", //id plano existente
        "on_behalf_of"     => "3cacf5fb446e4c3abf969157143942c2", //id vendedor
        "customer"         => "2dbc63f476db4a39bd210cbc36ead1ae", //id comprador  
        "payment_method"   => "credit",
        "due_date"         => "2020-09-01", //data da próxima cobrança
        "due_since_date"   => "2020-09-01", //data da primeira cobrança da assinatura
        //"expiration_date"  => "2020-08-01", //data final da assinatura
        "amount"           => "10200", //valor em centavos
        "currency"         => "BRL", //moeda utilizada, no formato ISO4217
        "grace_period"     => "7", //perído (dias) de carência para a primeira cobrança da assinatura
        "tolerance_period" => "5" //perído de tolerancia caso haja falha de pagamento
    ];

    $id = '9d4fd37f590d4771974e1ff909f9f592';

    $assinatura = $assinatura->edit($id, $data);
    
    echo '<pre>';
    print_r($assinatura);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}