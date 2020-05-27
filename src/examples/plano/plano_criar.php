<?php

try {

    $api = require_once('../api.php');

    $newPlan = [
        "name"            => "Básico",
        "frequency"       => "monthly",
        "interval"        => 30,
        "payment_methods" => ['credit'],
        "currency"         => "BRL",
        "amount"           => 1800,
        "setup_amount"     => 2000,
        "description"      => "Plano básico",
        "grace_period"     => 7,
        "tolerance_period" => 5
    ];

    $plano = $api->createPlan($newPlan);
    
    echo '<pre>';
    print_r($plano);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}