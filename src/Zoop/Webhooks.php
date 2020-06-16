<?php

namespace Zoop;

/**
 * Endpoint de Webhooks
 * 
 * @link 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class Webhooks extends Endpoint {

    /**
     * @return string o nome do endpoint da model 
    */
    public function getEndpoint(){

        return 'webhooks';
    }

}