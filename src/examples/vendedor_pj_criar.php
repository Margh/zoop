<?php

try {

    $api = require_once('api.php');

    //AINDA NÂO ESTÁ FUNCIONANDO

    /* {
        "id": "<string>",
        "status": "<string>",
        "resource": "<string>",
        "type": "<string>",
        "account_balance": "<number>",
        "current_balance": "<number>",
        "fiscal_responsibility": "<string>",
        "owner": {
            "first_name": "<string>",
            "last_name": "<string>",
            "email": "<string>",
            "phone_number": "<string>",
            "taxpayer_id": "<string>",
            "birthdate": "<string>"
        },
        "description": "<string>",
        "business_name": "<string>",
        "business_phone": "<string>",
        "business_email": "<string>",
        "business_website": "<string>",
        "business_description": "<string>",
        "business_facebook": "<string>",
        "business_twitter": "<string>",
        "ein": "<string>",
        "business_address": {
            "line1": "<string>",
            "line2": "<string>",
            "line3": "<string>",
            "neighborhood": "<string>",
            "city": "<string>",
            "state": "<string>",
            "postal_code": "<string>",
            "country_code": "<string>"
        },
        "business_opening_date": "<date>",
        "owner_address": {
            "line1": "<string>",
            "line2": "<string>",
            "line3": "<string>",
            "neighborhood": "<string>",
            "city": "<string>",
            "state": "<string>",
            "postal_code": "<string>",
            "country_code": "<string>"
        },
        "delinquent": "<boolean>",
        "default_debit": "<string>",
        "default_credit": "<string>",
        "mcc": "<string>",
        "metadata": "<object>",
        "created_at": "<dateTime>",
        "updated_at": "<dateTime>"
    } */

    $arrDados = [
        "fiscal_responsibility" => "",
        'owner'                 => [
            'first_name'   => 'Victor',
            'last_name'    => 'Aguiar',
            'email'        => 'papitos@margh.com',
            'phone_number' => '022981256536',
            'taxpayer_id'  => '11058709798',
            'birthdate'    => '1986-12-15',
            'address'      => [
                'line1'        => 'Av Americas, 500',
                'line2'        => 'Citta América',
                'neighborhood' => 'Barra da Tijuca',
                'city'         => 'Rio de Janeiro',
                'state'        => 'RJ',
                'postal_code'  => '22845046',
                'country_code' => 'BR'
            ],
        ],
        'description'           => "Margh Consultoria e Desenvolvimento de Software LTDA ME",
        'business_name'         => "Margh Consultoria e Desenvolvimento de Software LTDA ME",
        'business_phone'        => '022981445556',
        'business_email'        => 'contato@margh.com',
        'business_website'      => 'www.margh.com.br',
        'business_description'  => "Empresa líder em desenvolvimento de software no Brasil",
        'business_opening_date' => "2020-06-01",
        'business_facebook'     => '',
        'business_twitter'      => '',
        'ein'                   => '40669539000152',
        'statement_descriptor'  => "Margh",
        'mcc'                   => '',
    ];

    $vendedor = $api->createSeller($arrDados);
    //Erro retornado caso já exista um vendedor cadastrado com o cnpj informado.
    //{"error":{"status":"Conflict","status_code":409,"type":"invalid_request_error","category":"duplicate_taxpayer_id","message":"Customer with ein \"93219324000104\" already exists."}}

    echo '<pre>';
    print_r($vendedor);

} catch(\Exception $e){
    echo $e->getMessage() . PHP_EOL;
}