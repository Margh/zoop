<?php

namespace Zoop;

/**
 * Endpoint de boletos
 * 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
 */
class Boletos extends Endpoint {
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'boletos';
    }

    /**
     * Envia o boleto por email
     * 
     * @param string $id = id do boleto
     * @return object Resposta do serviço
    */
    public function sendByEmail($id = null){
        
        try{

            if(empty($id)) throw new \Exception("Id não informado.");

            $complement = '/emails';

            $this->api->complementUrl($id . $complement);

            return $this->api->execute('post', $this->getEndpoint(), null);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

}