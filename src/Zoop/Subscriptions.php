<?php

namespace Zoop;

/**
 * Endpoint de assinaturas
 * 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class Subscriptions extends Endpoint {
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'subscriptions';
    }    
}