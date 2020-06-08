<?php
namespace Zoop\MarketPlace;

use Zoop\Core\Zoop;
/**
 * Class Cards
 * 
 * Essa classe é utilizada para associar um token de cartão
 * a um comprador, recuperar detalhes, remover e 
 * alterar detalhes do cartão
 * 
 * @package Zoop\MarketPlace
 * @author Victor <victor@margh.com.br>
 * @version 1.0.0
 */
class Cards extends Zoop
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
     * @param array $content
     * content = ["token" => "{{id_token}}", 
     * "customer" => "{{id_card}}"]
     * @return bool|array
     * @throws \Exception
     */
    public function associatecard(array $content)
    {
        try {

            $request = $this->configurations['guzzle']->request(
                'POST', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. "/cards", 
                ['json' => $content]
            );

            $response = \json_decode($request->getBody()->getContents(), true);

            if(!$response || !is_array($response)) throw new \Exception("Resposta não esperada: {$response}");

            return $response;

        } catch (\Exception $e){

            return $this->ResponseException($e);

        }
    }

    /**
     * getCard function
     *
     * Pega os dados de um cartão utilizando seu id
     * como paramtro.
     *
     * @param string|int $id
     *
     * @return void
     * @throws \Exception
     */
    public function getCard($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/cards/'. $id
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

    /**
     * function deleteCard
     *
     * Deleta um cartão do marketplace utilizando como parametro
     * seu id.
     *
     * @param $id
     *
     * @return bool|mixed|void
     * @throws \Exception
     */
    public function deleteCard($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'DELETE', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/cards/' . $id
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

    /**
     * function PutCard
     *
     * Altera os dados do cartão associado
     * ao id passado como parametro.
     *
     * @param string $id
     * @param array  $card
     *
     * @return bool|array
     * @throws \Exception
    */
    public function putCard($id, $card)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'PUT', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/cards/' . $id,
                ['json' => $card]
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