<?php
namespace Zoop\MarketPlace;

use Zoop\Core\Zoop;
/**
 * Class Sellers
 * 
 * Essa classe é resposavel por lidar com os usuarios
 * dentro do marketplace ao nivel do marketplace zoop.
 * 
 * @package Zoop\MarketPlace
 * @author italodeveloper <italoaraujo788@gmail.com>
 * @version 1.0.0
 */
class Sellers extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * createSeller function
     *
     * Cria o vendedor dentro do markeplace 
     *
     * @param array $seller
     * @param array $type = 'businesses' or 'individuals'
     *
     * @return bool|array
     * @throws \Exception
     */
    public function createSeller(array $seller, $type = 'businesses')
    {
        try {

            $request = $this->configurations['guzzle']->request(
                'POST', '/v1/marketplaces/'. $this->configurations['marketplace']. "/sellers/{$type}", 
                ['json' => $seller]
            );

            $response = \json_decode($request->getBody()->getContents(), true);

            if(!$response || !is_array($response)) throw new \Exception("Resposta não esperada: {$response}");

            return $response;

        } catch (\Exception $e){

            return $this->ResponseException($e);

        }
    }

    /**
     * getSeller function
     *
     * Pega os dados de um vendedor utilizando seu id
     * como paramtro.
     *
     * @param string|int $id
     *
     * @return void
     * @throws \Exception
     */
    public function getSeller($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/sellers/'. $id
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
     * getAllSellers function
     *
     * Lista todos os vendedores do marketplace
     * 
     * @throws \Exception
     * @return array|void
     */
    public function getAllSellers()
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/sellers'
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
     * getSellerByCPF function
     *
     * Busca o vendedor pel CPF
     * 
     * @param string $cpf
     * @throws \Exception
     * @return array|void
     */
    public function getSellerByCPF($cpf)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/sellers/search?taxpayer_id=' . $cpf
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
     * getSellerByCNPJ function
     *
     * Busca o vendedor pelo CNPJ
     * 
     * @param string $cnpj
     * @throws \Exception
     * @return array|void
     */
    public function getSellerByCNPJ($cnpj)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/sellers/search?ein=' . $cnpj
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