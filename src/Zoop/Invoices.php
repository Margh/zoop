<?php

namespace Zoop;

/**
 * Endpoint de faturas
 * 
 * @link
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class Invoices extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'invoices';
    }    
}