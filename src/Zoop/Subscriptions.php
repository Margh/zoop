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

    /**
     * Reativa uma assinatura
     * 
     * @param string $id = id da assinatura
     * @return object Resposta do serviço
    */
    public function reactivate($id = null){
        
        try{

            if(empty($id)) throw new \Exception("Id não informado.");

            $complement = '/reactivate';

            $this->api->complementUrl($id . $complement);

            return $this->api->execute('post', $this->getEndpoint(), null);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Suspende uma assinatura
     * 
     * @param string $id = id da assinatura
     * @return object Resposta do serviço
    */
    public function suspend($id = null){
        
        try{

            if(empty($id)) throw new \Exception("Id não informado.");

            $complement = '/suspend';

            $this->api->complementUrl($id . $complement);

            return $this->api->execute('post', $this->getEndpoint(), null);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

}