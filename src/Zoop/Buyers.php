<?php

namespace Zoop;

/**
 * Endpoint de buyers
 * 
 * @link http://superlogica.com/developers/api/#!/Clientes.json
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
 */
class Buyers extends Endpoint {
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'buyers';
    }

}