<?php

try {

    $api = require_once('../api.php');

    $id = 'ac904dc665fa4320ac2ac43d37544759';

    $plan = [
        "name"             => "Básico",
        "frequency"        => "monthly",
        "interval"         => 1,
        "payment_methods"  => [],
        "currency"         => "BRL",
        "amount"           => 18000,
        "description"      => "Plano básico",
        "grace_period"     => 7,
        "tolerance_period" => 5
    ];

    $plano = $api->putPlan($id, $plan);
    
    echo '<pre>';
    print_r($plano);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}