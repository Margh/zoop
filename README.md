![alt text](https://zoop.co/dist/imgs/zoop-logo3.png "Logo Zoop")

# Zoop SDK - PHP :elephant:
SDK Não oficial Zoop PHP, para realizar integração com o gateway de pagamento.

Observação a contribuidores: só será mergido bundles com o mesmo padrão de projeto, não repita nomes de funções dentro dos novos bundles para não confitar com os atuais.

instalando via composer
```
composer require margh/zoop
```

## Criando o cliente para realizar as operações da Zoop
``` php
<?php

require_once('../../../vendor/autoload.php');

$marketplaceId = ''; //id do marketplace
$token         = ''; //username
$vendedor      = ''; //password
//$versao_api    = 'v2';

// Obtenha os tokens de teste com o zoop
return new \Zoop\Api($token, $vendedor, $marketplaceId);
```
O cliente de integração pode utilizar a seguinte combinação de metodos
que já estão prontos e abstraidos para simples utilização.  

``` php
try {

    $api = require_once('../api.php');

    $api->setApiVersion('v1');

    $transaction = new \Zoop\Transactions($api);

    $transaction = $transaction->get([
        'limit'=>'20',
        'sort' => 'time-descending'
    ]);

    echo '<pre>';
    print_r($transaction);

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
}
```
Para as demais funções, acesse nossa wiki e confira: 
[Zoop SDK Wiki](https://github.com/margh/zoop/wiki).

Desenvolvido por [margh](https://www.margh.com.br/) e contribuidores.
