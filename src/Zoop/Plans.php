<?php

namespace Zoop;

/**
 * Endpoint de planos
 * 
 * @link
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class Plans extends Endpoint{
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'plans';
    }    
}