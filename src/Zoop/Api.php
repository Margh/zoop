<?php

namespace Zoop;

/**
 * Responsável pela comunicação com a api zoop
 * 
 * @author Victor Aguiar <victor@margh.com>
 * @copyright (c) 2020
*/
class Api {
    
    private $curl;
    private $url = "https://api.zoop.ws/";
    private $username;
    private $password;
    private $marketplaceId;
    private $versao_api;
    private $timeout;
    private $headers = array();

    /**
     * Adiciona um item no Header
     * 
     * @param string $key
     * @param string $value
    */
    public function addHeader($key, $value){
        
        if(!empty($key) && !empty($value)){
            $this->headers[$key] = $value;
        }
    }

    /**
     * Construtor
     * 
     * @param string $url
     * @param string $username
     * @param string $password
     * @param int    $timeout
    */
    public function __construct($username, $password, $marketplaceId, $versao_api = 'v2', $timeout = 120){

        $this->curl           = new \Curl\Curl();
        $this->versao_api     = $versao_api;
        $this->username       = $username;
        $this->password       = $password;
        $this->marketplaceId  = $marketplaceId;
        $this->timeout        = $timeout;

        $this->addHeader('Content-Type' , 'application/json');
        $this->addHeader('Accept'       , 'application/json');
    }

    /**
     * Executa um endpoint
     * 
     * @param string $action post|put|get|delete
     * @param string endpoint
     * @param array $data Parâmetros da requisicao
     * @throws \Exception
     * @return string Resposta do serviço
    */
    public function execute($action, $endpoint, $data){
        
        try{
            
            $this->curl->setBasicAuthentication($this->username, $this->password);

            $this->curl->setOpt(CURLOPT_RETURNTRANSFER , true);
            $this->curl->setOpt(CURLOPT_FOLLOWLOCATION , true);
            $this->curl->setOpt(CURLOPT_SSL_VERIFYPEER , false);
            $this->curl->setOpt(CURLOPT_SSL_VERIFYHOST , false);

            foreach($this->headers as $key => $value){
                
                $this->curl->setHeader($key, $value);
            }

            $this->curl->setConnectTimeout($this->timeout);

            $url = $this->url . $this->versao_api .'/marketplaces/'. $this->marketplaceId .'/' . $endpoint;

            $this->curl->$action($url, $data);

            if($this->curl->error) {

                throw new \Zoop\Exception($this->curl);
            }

            return $this->curl->response;
        }
        catch(\Exception $e){
            
            throw $e;
        }        
    }

    /**
     * Seta a versao da api
     * 
     * @param string versao
     * @throws \Exception
     * @return string Resposta do serviço
    */
    public function setApiVersion($versao){
        
        $this->versao_api = $versao;
 
    }

}