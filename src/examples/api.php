<?php

require_once('../../../vendor/autoload.php');

$marketplaceId = 'c8cb57dbc9ac48c8821be069c268c874';
$token         = 'zpk_test_rQhtNYzw5rTjt2vZydh5qy7c'; //username
$vendedor      = '3cacf5fb446e4c3abf969157143942c2';  //password
//$versao_api    = 'v2';

// Obtenha os tokens de teste com o zoop
return new \Zoop\Api($token, $vendedor, $marketplaceId);