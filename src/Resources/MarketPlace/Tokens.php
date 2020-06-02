<?php
namespace Zoop\MarketPlace;

use Zoop\Zoop;
/**
 * Class Tokens
 * 
 * Essa classe é utilizada para criar e recuperar os tokens no marketplace
 * 
 * @package Zoop\MarketPlace
 * @author Victor <victor@margh.com.br>
 * @version 1.0.0
 */
class Tokens extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * createCard function
     *
     * Cria um token para um cartão
     *
     * @param array $card
     *
     * @return bool|array
     * @throws \Exception
    */
    public function createCard(array $card)
    {
        try {

            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. "/cards/tokens", 
                ['json' => $card]
            );

            $response = \json_decode($request->getBody()->getContents(), true);

            if(!$response || !is_array($response)) throw new \Exception("Resposta não esperada: {$response}");

            return $response;

        } catch (\Exception $e){

            return $this->ResponseException($e);

        }
    }

    /**
     * createCard function
     *
     * Cria um token para um conta bancária
     *
     * @param array $account
     *
     * @return bool|array
     * @throws \Exception
    */
    public function createAccount(array $account)
    {
        try {

            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. "/bank_accounts/tokens", 
                ['json' => $account]
            );

            $response = \json_decode($request->getBody()->getContents(), true);

            if(!$response || !is_array($response)) throw new \Exception("Resposta não esperada: {$response}");

            return $response;

        } catch (\Exception $e){

            return $this->ResponseException($e);

        }
    }

    /**
     * getToken function
     *
     * Pega os dados de um token utilizando seu id
     * como paramtro.
     *
     * @param string|int $id
     *
     * @return void
     * @throws \Exception
     */
    public function getToken($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/tokens/'. $id
            );
            $response = \json_decode($request->getBody()->getContents(), true);
            if($response && is_array($response)){
                return $response;
            }
            return false;
        } catch (\Exception $e){            
            return $this->ResponseException($e);
        }
    }

}