<?php

namespace Zoop;

/**
 * Endpoint de contas bancárias
 * 
 * @link 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class BankAccounts extends Endpoint {

    /**
     * @return string o nome do endpoint da model 
    */
    public function getEndpoint(){

        return 'bank_accounts';
    }

}