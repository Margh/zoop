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

    /**
     * Cria um dado no endpoint
     * 
     * @param array $data = null Parâmetros da requisição
     * @param array $type = 'individuals' ou 'businesses'
     * @return object Resposta do serviço
    */
    public function create($data = null, $type = null){
        
        try{

            if(empty($type)) throw new \Exception("Tipo do vendedor não foi informado.");

            $this->api->complementUrl($type);

            $this->api->addHeader('content-type', 'application/json');

            return $this->api->execute('post', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Edita um dado no endpoint
     * 
     * @param array $data = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function edit($id = null, $data = null, $type = null){
        
        try{
            
            if(empty($id))   throw new \Exception("Id não informado.");
            if(empty($type)) throw new \Exception("Tipo do vendedor não foi informado.");

            $complement = $type.'/'.$id;

            $this->api->complementUrl($complement);

            $this->api->addHeader('content-type', 'application/json');

            return $this->api->execute('put', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Busca o vendedor pelo cnpj
     * 
     * @param  string $cnpj = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function searchByCNPJ($cnpj = null){
        
        try{
            
            if(empty($cnpj))   throw new \Exception("CNPJ não informado.");

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
     * Busca o vendedor pelo cpf
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

    /**
     * Lista as contas bancarias do vendedor
     * 
     * @param  string $id = null Parâmetros da requisição
     * @param  array  $data = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function searchAccounts($id = null, $data = null){

        try{

            if(empty($id)) throw new \Exception("Id não informado.");

            $this->api->complementUrl($id.'/bank_accounts');

            return $this->api->execute('get', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){

            throw $e;
        }
    }

    /**
     * Lista as faturas do vendedor
     * 
     * @param  string $id   = null Parâmetros da requisição
     * @param  array  $data = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function searchInvoices($id = null, $data = null){

        try{

            if(empty($id)) throw new \Exception("Id não informado.");

            $this->api->complementUrl($id.'/invoices');

            return $this->api->execute('get', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){

            throw $e;
        }
    }

}