<?php

namespace Zoop;

/**
 * Endpoint de transações
 * 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
 */
class Transactions extends Endpoint {
    
    /**
     * @return string o nome do endpoint da model 
     */
    public function getEndpoint(){
        
        return 'transactions';
    }

    /**
     * Captura uma transação de cartão não presente
     * 
     * @param string  $id = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function capture($id = null, $data = null){
        
        try{
            
            if(empty($id)) throw new \Exception("Id não informado.");

            $this->api->addHeader('content-type', 'application/json');
            
            $this->api->complementUrl($id.'/capture');

            return $this->api->execute('post', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){

            throw $e;
        }        
    }

    /**
     * Estorna uma transação de cartão não presente
     * 
     * @param string  $id = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function void($id = null, $data = null){
        
        try{
            
            if(empty($id)) throw new \Exception("Id não informado.");

            $this->api->addHeader('content-type', 'application/json');
            
            $this->api->complementUrl($id.'/void');

            return $this->api->execute('post', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){

            throw $e;
        }        
    }

}