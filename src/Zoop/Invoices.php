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

    /**
     * Aprova uma fatura
     * 
     * @param string  $id = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function approve($id = null){
        
        try{

            if(empty($id)) throw new \Exception("Id não informado.");
            
            $this->api->addHeader('content-type', 'application/json');
            
            $this->api->complementUrl($id . '/approve');

            return $this->api->execute('post', $this->getEndpoint(), null);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Estorna uma fatura
     * 
     * @param string  $id = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function void($id = null){
        
        try{

            if(empty($id)) throw new \Exception("Id não informado.");

            $this->api->addHeader('content-type', 'application/json');
            
            $this->api->complementUrl($id . '/void');

            return $this->api->execute('post', $this->getEndpoint(), null);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

}