<?php
namespace Zoop\Marketplace;

use Zoop\Zoop;
/**
 * Transactions class
 * 
 * Essa classe é responsavel por cuidar das transações do vendedor
 * dentro do marketplace e pode ser utilizada para consultar por exemplos
 * boletos (Tickets).
 * 
 * @package Zoop\Marketplace
 * @author italodeveloper <italo.araujo@gmail.com>
 * @version 1.0.0
 */
class Transactions extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * function getAllTransactions
     *
     * Pega todas as transações do vendedor dentro
     * do marketplace
     *
     * @return bool|array
     * @throws \Exception
     */
    public function getAllTransactions()
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/transactions'
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
     * getTransaction function
     *
     * Pega os detalhes de uma transação em especifico
     * utilizando como parametro o id da mesma.
     *
     * @param string $id
     *
     * @return array|bool
     * @throws \Exception
     */
    public function getTransaction($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/transactions/'. $id
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
     * getTransactionsBySeller function
     *
     * Lista as transações do vendedor(seller)
     * utilizando como parametro o id do mesmo.
     *
     * @param string $id
     *
     * @return array|bool
     * @throws \Exception
     */
    public function getTransactionsBySeller($id)
    {
        try {
            $request = $this->configurations['guzzle']->request(
                'GET', '/'.$this->configurations['versao_api'].'/marketplaces/'. $this->configurations['marketplace']. '/sellers/'. $id .'/transactions'
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