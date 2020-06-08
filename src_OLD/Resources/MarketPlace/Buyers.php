<?php
namespace Zoop\MarketPlace;

use Zoop\Core\Zoop;
/**
 * Class Buyers
 * 
 * Essa classe é resposavel por lidar com os usuarios
 * dentro do marketplace ao nivel do marketplace zoop.
 * 
 * @package Zoop\MarketPlace
 * @author italodeveloper <italoaraujo788@gmail.com>
 * @version 1.0.0
 */
class Buyers extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * createBuyer function
     *
     * Cria o usuario dentro do markeplace ('não é associado ao vendedor')
     *
     * @param array $user
     *
     * @return bool|array
     * @throws \Exception
     */
    public function createBuyer(array $user)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'POST', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers', 
                ['json' => $user]
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
     * getAllBuyers function
     *
     * Lista todos os usuarios do marketplace
     * ('não realiza associação com o vendedor')
     *
     * @return bool|array
     * @throws \Exception
     */
    public function getAllBuyers()
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers'
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
     * function getBuyer
     *
     * Pega os dados do usuario associado
     * ao id passado como parametro.
     *
     * @param string $userId
     *
     * @return bool|array
     * @throws \Exception
     */
    public function getBuyer($userId)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers/' . $userId
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
     * function deleteBuyer
     *
     * Deleta um usuario do marketplace utilizando como parametro
     * seu id.
     *
     * @param $userId
     *
     * @return bool|mixed|void
     * @throws \Exception
    */
    public function deleteBuyer($userId)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'DELETE', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers/' . $userId
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
     * function getBuyerByCPF
     *
     * Pega os dados do usuario associado
     * ao cpf passado como parametro.
     *
     * @param string $cpf
     *
     * @return bool|array
     * @throws \Exception
    */
    public function getBuyerByCPF($cpf)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers/search?taxpayer_id=' . $cpf
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
     * function getBuyerByCNPJ
     *
     * Pega os dados do usuario associado
     * ao cnpj passado como parametro.
     *
     * @param string $cnpj
     *
     * @return bool|array
     * @throws \Exception
    */
    public function getBuyerByCNPJ($cnpj)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers/search?ein=' . $cnpj
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
     * function PutBuyer
     *
     * Altera os dados do comprador associado
     * ao id passado como parametro.
     *
     * @param string $id
     * @param array  $buyer
     *
     * @return bool|array
     * @throws \Exception
    */
    public function putBuyer($id, $buyer)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'PUT', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers/' . $id,
                ['json' => $buyer]
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