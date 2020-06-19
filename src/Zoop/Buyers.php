<?php

namespace Zoop;

/**
 * Endpoint de buyers
 * 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
 */
class Buyers extends Endpoint {
    
    /**
     * @return string o nome do endpoint da model 
    */
    protected function getEndpoint(){
        
        return 'buyers';
    }

     /**
     * Busca o comprador pelo cnpj
     * 
     * @param  string $cnpj = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function searchByCNPJ($cnpj = null){
        
        try{
            
            if(empty($cnpj)) throw new \Exception("CNPJ não informado.");

            $this->api->complementUrl('search');
            
            $data = [
                'ein' => $cnpj
            ];

            return $this->api->execute('get', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Busca o comprador pelo cpf
     * 
     * @param  string $cpf = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function searchByCPF($cpf = null){

        try{

            if(empty($cpf)) throw new \Exception("CPF não informado.");

            $this->api->complementUrl('search');

            $data = [
                'taxpayer_id' => $cpf
            ];

            return $this->api->execute('get', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){

            throw $e;
        }
    }
}