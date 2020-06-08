<?php


try {   
    $api = require_once('../api.php');

    $id = 'fc2ecfa426954d9cb11abaecd790d4a4';

    $plano = $api->getPlan($id);

    echo '<pre>';
    print_r($plano);

} catch (\Exception $e) {
    
    echo $e->getMessage() . PHP_EOL;
}