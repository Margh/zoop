<?php

use Zoop\Core\Config;
use Zoop\ZoopClient AS Api;

require_once('../../vendor/autoload.php');

$marketplace = 'c8cb57dbc9ac48c8821be069c268c874';
$token       = 'zpk_test_rQhtNYzw5rTjt2vZydh5qy7c'; //username
$vendedor    = '3cacf5fb446e4c3abf969157143942c2';  //password
$versao_api  = 'v2';

// Obtenha os tokens de teste com o zoop
return new Api(
    Config::configure($token, $marketplace, $vendedor, null, $versao_api)
);