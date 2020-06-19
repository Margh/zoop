<?php

namespace Zoop;

/**
 * Define os comportamentos básicos de um endpoint na api
 * 
 * @author Victor Aguiar <victor@margh.com.br>
 * @copyright (c) 2020
*/
abstract class Endpoint {
    
    protected $api;

    /**
     * @return string o nome do endpoint da model 
    */
    abstract protected function getEndpoint();

    /**
     * Construtor.
     * 
     * @param \Zoop\Api $api
    */
    public function __construct(\Zoop\Api $api){

        $this->api = $api;
    }

    /**
     * Apaga um registro no endpoint
     * 
     * @param array $data = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function delete($id = null){
        
        try{
            
            if(empty($id)) throw new \Exception("Id não informado.");

            $this->api->complementUrl($id);

            return $this->api->execute('delete', $this->getEndpoint(), null);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Busca pelo id
     * 
     * @param array $id = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function searchById($id = null){
        
        try{
            
            if(empty($id)) throw new \Exception("Id não informado.");

            $this->api->complementUrl($id);

            return $this->api->execute('get', $this->getEndpoint(), null);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Busca todos os registro do endpoint
     * 
     * @param array $data = null Parâmetros da requisição
     * @return object Resposta do serviço
    */
    public function searchAll($data = null){

        try{

            return $this->api->execute('get', $this->getEndpoint(), $data);
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
    public function edit($id = null, $data = null){
        
        try{
            
            if(empty($id)) throw new \Exception("Id não informado.");

            $this->api->complementUrl($id);

            $this->api->addHeader('content-type', 'application/json');

            return $this->api->execute('put', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
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

            return $this->api->execute('post', $this->getEndpoint(), $data);
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

}