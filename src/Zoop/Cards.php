<?php

namespace Zoop;

/**
 * Endpoint de boletos
 * 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
 */
class Cards extends Endpoint {
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'cards';
    }

}