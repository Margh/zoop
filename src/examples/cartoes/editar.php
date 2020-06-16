<?php

try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $id = 'caf04c8ed9344c43a951b1b2376f2660';
    
    $api->incrementUrl($id);

    $plano = new \Zoop\Cards($api);

    $data = [
        "holder_name"     => "João Cabral",
        "expiration_month"=> "03",
        "expiration_year" => "2018",
        "security_code"   => "123",
        "card_number"     => "5201561050024014",
        //"is_active"       => true
    ];

    $plano = $plano->put($data);
    
    echo '<pre>';
    print_r($plano);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
    //var_dump($e);
}