<?php

namespace Zoop;

/**
 * Endpoint de itens de sellers
 * 
 * @link 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class Sellers extends Endpoint {

    /**
     * @return string o nome do endpoint da model 
    */
    public function getEndpoint(){

        return 'sellers';
    }

}