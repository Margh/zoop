<?php


try {   
    $api = require_once('api.php');

    $id = 'e557a2d753f24383bc9c184e876eecd2';

    $plano = $api->getPlan($id);

    echo '<pre>';
    print_r($plano);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}