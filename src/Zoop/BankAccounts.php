<?php

namespace Zoop;

/**
 * Endpoint de contas bancárias
 * 
 * @link 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
class BankAccounts extends Endpoint {

    /**
     * @return string o nome do endpoint da model 
    */
    public function getEndpoint(){

        return 'bank_accounts';
    }

    /**
     * cria um dado no endpoint
     * 
     * @param string $id = null Parâmetros da requisição
     * @param array  $data = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function create($data = null){
        
        try{

            $this->api->addHeader('content-type', 'application/json');
            
            $this->api->complementUrl('tokens');

            return $this->api->execute('post', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Associa um token de uma conta a um cliente
     * 
     * @param array  $data = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function linkCustomer($data = null){
        
        try{

            $this->api->addHeader('content-type', 'application/json');

            return $this->api->execute('post', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

}