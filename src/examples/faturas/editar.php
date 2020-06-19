<?php

try {

    $api = require_once('../api.php');

    //usar a v2 para planos
    $api->setApiVersion('v2');

    $fatura = new \Zoop\Invoices($api);

    $data = [
        "payment_method" => "credit", //método de pagamento
        "due_date" => "2020-09-01", //data da próxima cobrança
        "subscription" => "9d4fd37f590d4771974e1ff909f9f592", //referência a uma assinatura existente
        "on_behalf_of" => "3cacf5fb446e4c3abf969157143942c2", //referência a um vendedor existente
        "customer" => "2dbc63f476db4a39bd210cbc36ead1ae", //referência a um comprador existente
        "description" => "Plano básico 2/12", //descrição da assinatura
        "amount" => 10000, //valor em centavos
        "expiration_date" => "2020-09-01", //data de vencimento cobrança
        "currency" => "BRL", //moeda utilizada seguindo o padrão ISO4217
        "grace_period" => 7, //período de carência após cobrança gerada
        "tolerance_period" => 5, //período de tolerância caso haja falha no pagamento
        "retries" => 0, //quantidade de vezes que tentou efetuar o pagamento
        "max_retries" => 5 //quantidade máxima de vezes que se deve tentar efetuar o pagamento
    ];

    $id = '608b41fac101411cad451ebd94e3d0c3';

    $fatura = $fatura->edit($id, $data);
    
    echo '<pre>';
    print_r($fatura);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}